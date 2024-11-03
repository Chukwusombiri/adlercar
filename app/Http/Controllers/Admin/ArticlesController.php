<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{    
    public $articles;

    public function __construct()
    {
        $this->articles = Article::orderBy('id','desc')->get();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {               
        return view('admin.articles')->with(['articles'=>$this->articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {                  
        return view('admin.addarticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[           
            'title' => ['required','string'],
            'main_content' => ['required','string'],
            'sub_title' => ['string','nullable'],
            'sub_content' => ['string','nullable'],
            'author' => ['string','nullable'],            
            'author_img'=>['required','image','max:1999'],
            'cover_img' => ['required','image','max:1999'],            
        ]);
       

        $article =  new Article();  

        if ($request->hasFile('cover_img') && $request->hasFile('author_img')) {

         $author_img = $request->author_img->storePublicly('authors','public');
         $cover_img = $request->cover_img->storePublicly('articles','public');         

        }else {
            $cover_img = 'articles/noimage.jpg';
            $author_img ='authors/avatar.jpg';
        }
       
        $article->title= $request->title;
        $article->main_content= $request->main_content;   
        $article->sub_title= $request->sub_title ?? '';     
        $article->sub_content= $request->sub_content ?? '';  
        $article->author= $request->author ?? '';          
        $article->cover_img= $cover_img;
        $article->author_img= $author_img;
        $article->slug= Str::slug($request->title);

        $article->save();

        return redirect()->route('admin.articles')->with('success','Article created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       
        $article = Article::find($id);        
       return view('admin.showarticle')->with([           
           'article' => $article,
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {                    
        $article = Article::find($id);
       return view('admin.editarticle')->with([
           'article' => $article, 
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request,[           
            'title' => ['required','string'],
            'main_content' => ['required','string'],
            'sub_title' => ['string','nullable'],
            'sub_content' => ['string','nullable'],
            'author' => ['string','nullable'],            
            'author_img'=>['image','max:1999'],
            'cover_img' => ['image','max:1999'],            
        ]);

        $article =  Article::find($id);    

        if ($request->hasFile('cover_img')){   
            if($article->cover_img){
                Storage::disk('public')->delete($article->cover_img);
            }         
            $article->cover_img = $request->cover_img->storePublicly('articles','public');         
        }

        if ($request->hasFile('author_img')){
            if($article->author_img){
                Storage::disk('public')->delete($article->author_img);
            } 
            $article->author_img = $request->author_img->storePublicly('authors','public');
        }
        
        $article->title= $request->title;
        $article->main_content= $request->main_content;
        $article->sub_title= $request->sub_title ?? '';
        $article->sub_content= $request->sub_content ?? '';  
        $article->author= $request->author ?? '';         

        $article->update();

        return redirect()->route('admin.articles')->with('success','Article modified successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);

        if($article->cover_img !== 'articles/noimage.jpg'){
            Storage::disk('public')->delete($article->cover_img);
        }

        if($article->author_img !== 'authors/avatar.jpg'){
            Storage::disk('public')->delete($article->author_img);
        }
        
        $article->delete();

        return redirect()->route('admin.articles')->with('success','Article deleted successfully');
    }
}