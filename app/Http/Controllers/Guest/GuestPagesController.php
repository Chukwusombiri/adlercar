<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Company;
use App\Models\Faq;
use App\Models\Plan;
use App\Models\Shipment;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class GuestPagesController extends Controller
{
        public function index(){
            $articles = Article::orderByDesc('id')->limit(3)->get();                     
            $company= Company::first();                        
            return view('guest.index')->with([
            'articles'=>$articles,
            'company'=>$company,
            ]);
        }

        public function about(){
            $team= team::all();                       
            return view('guest.about')->with(['team'=>$team,]);
        }


        public function testimonials(){            
            return view('guest.testimonials');
        }

        public function faqs(){                       
            return view('guest.faqs');
        }       

        public function contact(){
            $company= Company::first();          
            return view('guest.contact')->with(['company'=>$company,]);
        }      
                 
        public function schedule(){            
                 
            return view('guest.schedule');
        }             
        
        public function quote(){
            return view('guest.quote');
        }

        public function warehouse(){
            return view('guest.warehouse_solutions');
        }
        
        public function transport(){
            return view('guest.transport');
        }

        public function air(){
            return view('guest.air');
        }

        public function ocean(){
            return view('guest.ocean');
        }

        public function road(){
            return view('guest.road');
        }

        public function rail(){
            return view('guest.rail');
        }

        public function blogs(){
            return view('guest.blogs');
        }

        public function readarticle($slug){
            $article = Article::where('slug',$slug)->first();
            return view('guest.readarticle')->with('article',$article);
        }

        public function trackNow($id){
            $shipment = Shipment::whereRelation('tracker','tracker_id',$id)->first();
            return view('guest.track_shipment')->with([
                'shipment'=>$shipment,
            ]);
        }

        public function ukrain(){
            return view('guest.ukrain');
        }
}
