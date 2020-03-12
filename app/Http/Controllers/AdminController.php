<?php

namespace App\Http\Controllers;
use App\Roadmaplike;
use App\Roadmapcomment;
use App\Commentreply;
use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\WorkshopContact;
use App\Subscribe;
use App\Contactus;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('admin.home');
    }
    
    
    public function roadmapunlike(Request $request){
        
        Roadmaplike::findorfail($request->id)->delete();
         return response()->json(['success'=>true,'msg'=>'removed']);
        
    } 
    public function allusers(){
        
        $data['main']=User::all();
        return view('admin.allusers',$data);
    } 
    public function allorders(){
        
        $data['main']=Order::all();
        return view('admin.allorders',$data);
    }
     public function allsubs(){
        
        $data['main']=Subscribe::all();
        return view('admin.allsubs',$data);
    }
     public function allcontact(){
        
        $data['main']=Contactus::all();
        return view('admin.allcontact',$data);
    }
    public function roadmapdelcomment(Request $request){
        
        Roadmapcomment::findorfail($request->id)->delete();
         return response()->json(['success'=>true,'msg'=>'removed']);
        
    }
    public function commentreplydel(Request $request){
        
        Commentreply::findorfail($request->id)->delete();
         return response()->json(['success'=>true,'msg'=>'removed']);
        
    }
    public function commentreply(Request $request){
        
        $request->validate([
            'comment'=>'required',
            'id'=>'required|exists:roadmapcomments',
        ]);
        
        Commentreply::create([
            'roadmapcomment_id'=>$request->id,
            'comment'=>$request->comment
        ]);
         return response()->json(['success'=>true,'msg'=>'replied']);
        
    }
    public function workcontact()
    {
        $data['main']=WorkshopContact::all();
        return view('admin.workcontact',$data);
    }
    
}
