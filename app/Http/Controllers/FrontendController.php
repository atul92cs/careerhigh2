<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Category;
use App\Roadmap;
use App\Blog;
use App\Useractivity;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function roadmaps(Request $request)
    {
//        dd(Auth::guard()->check());
       $data['roadmap']= Roadmap::where('status',1)->where('url',$request->segment(2))->first();
        if(Auth::guard('web')->check()){
            Useractivity::create([
            'user_id'=>auth()->guard('web')->user()->id,
            'title'=> $data['roadmap']->title,
            'roadmap_id'=> $data['roadmap']->id,
        ]);
        }
        else{
            Useractivity::create([
            'user_id'=>0,
            'title'=> $data['roadmap']->title,
            'roadmap_id'=> $data['roadmap']->id,
        ]);
        }
        
        return view('singleroadmap',$data);
    }
    public function roadmaplike2(Request $request)
    {
        $data['roadmap']= Roadmap::where('status',1)->where('id',$request->id)->first();
        return view('roadmaplike2',$data);
        
    }
    public function category(Request $request)
    {
        $data['categories']=Category::where('status',1)->where('url',$request->segment(1))->first();
        
        return view('roadmaps',$data);
    } 
    public function allcategory(Request $request)
    {
        $data['categories']=Category::where('status',1)->orderBy('shuffle_id')->get();
        
        return view('categoryall',$data);
    }
    public function blog()
    {
        return view('blog');
    }
    public function blogsingle(Request $request)
    {
        
         $data['blog']= Blog::where('status',1)->where('url',$request->segment(2))->first();
        if(Auth::guard('web')->check()){
            Useractivity::create([
            'user_id'=>auth()->guard('web')->user()->id,
            'title'=> $data['blog']->title,
            'blog_id'=> $data['blog']->id,
        ]);
        }
        else{
            Useractivity::create([
            'user_id'=>0,
            'title'=> $data['blog']->title,
            'blog_id'=> $data['blog']->id,
        ]);
        }
        
        
        
        return view('blogsingle',$data);
    }
}
