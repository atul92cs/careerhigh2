<?php

namespace App\Http\Controllers;
use App\User;
use App\Roadmaplike;
use App\Roadmapcomment;
use App\Roadmap;
use App\Userbookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
          
        return view('user.home');
    }
    public function profile()
    {
        return view('user.profile');
    }
    public function profileedit()
    {
        return view('user.profileedit');
    }
    
   public function profileeditp(Request $request)
    {
       $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:20480'
        ]);
        
        $mm=Input::only('isug','ugyear','specialug','collegeug','ispg','pgyear','specialpg','collegepg','isworking','company','role','interest');
        if($request->hasFile('image'))
        {
            $photo= $request->image;            
            $filename = $photo->store('public/profile/');
            $mm['image']=  'profile/'.$photo->hashName();
        }
        User::findorfail(auth()->user()->id)->fill($mm)->save();
        
        
       notify()->success("saved successfully","Success","topRight");
        return redirect()->route('profile')->with(['success'=>'saved successfully']);
    }
    public function roadmaplike(Request $request)
    {
         $request->validate([
            'id'=>'required|exists:roadmaps,id,status,1',
        ]);
        $like=Roadmaplike::where('user_id',auth()->user()->id)->where('roadmap_id',$request->id)->where('title','Roadmap')->first();
        
        if(!$like){
            $mm=[
            'roadmap_id'=>$request->id,
            'user_id'=>auth()->user()->id,
            'title'=>'Roadmap',
        ];
        Roadmaplike::create($mm);
        
        
//       notify()->success("saved successfully","Success","topRight");
            return response()->json(['success'=>true,'msg'=>'Liked','count'=>Roadmap::findorfail($request->id)->like->count()]);
//        return redirect()->route('home')->with(['success'=>'Liked']);
        }
        else{
            return response()->json(['success'=>true,'msg'=>'Already Liked']);
//           return redirect()->route('home')->with(['success'=>'Already Liked']); 
        }
        
    }
    public function roadmapbookmark(Request $request)
    {
         $request->validate([
            'id'=>'required|exists:roadmaps,id,status,1',
        ]);
        $like=Userbookmark::where('user_id',auth()->user()->id)->where('roadmap_id',$request->id)->where('title','Roadmap')->first();
        
        if(!$like){
            $mm=[
            'roadmap_id'=>$request->id,
            'user_id'=>auth()->user()->id,
            'title'=>'Roadmap',
        ];
        Userbookmark::create($mm);
        
        
//       notify()->success("saved successfully","Success","topRight");
            return response()->json(['success'=>true,'msg'=>'Bookmarked']);
//        return redirect()->route('home')->with(['success'=>'Liked']);
        }
        else{
            return response()->json(['success'=>true,'msg'=>'Already Bookmarked']);
//           return redirect()->route('home')->with(['success'=>'Already Liked']); 
        }
        
    }
    public function removebookmark(Request $request)
    {
         $request->validate([
            'id'=>'required|exists:userbookmarks,id,user_id,'.auth()->user()->id,
        ]);
        $like=Userbookmark::where('id',$request->id)->first();
        
        $like->delete();

            return response()->json(['success'=>true,'msg'=>'Bookmarked Removed']);

        
    }
    public function roadmapcomment(Request $request)
    {
         $request->validate([
            'id'=>'required|exists:roadmaps,id,status,1',
        ]);

            $mm=[
            'roadmap_id'=>$request->id,
            'user_id'=>auth()->user()->id,
            'title'=>$request->comment,
        ];
        Roadmapcomment::create($mm);
        
            return response()->json(['success'=>true,'msg'=>'Comment Successfully added']);

        
    }
    public function blogcomment(Request $request)
    {
         $request->validate([
            'id'=>'required|exists:blogs,id,status,1',
        ]);

            $mm=[
            'blog_id'=>$request->id,
            'user_id'=>auth()->user()->id,
            'title'=>$request->comment,
        ];
        Roadmapcomment::create($mm);
        
            return response()->json(['success'=>true,'msg'=>'Comment Successfully added']);

        
    }
     public function useractivity()
    {
        return view('user.activity');
    }public function userbookmarks()
    {
        return view('user.bookmarks');
    }
}
