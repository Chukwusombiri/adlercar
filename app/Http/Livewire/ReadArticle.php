<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ReadArticle extends Component
{
    public Article $article;

    public function mount(Article $article){
        $this->article = $article;
    }
    public function render()
    {
        $blogs = Article::whereNotIn('id',[$this->article->id])->inRandomOrder()->take(4)->get();
        return view('livewire.read-article',[
            'article'=>$this->article,
            'blogs'=>$blogs,
        ]);
    }
}
