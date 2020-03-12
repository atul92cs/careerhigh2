<?php

namespace App\Http\Controllers;

use App\Workshoptab;
use App\Workshop;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class WorkshoptabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
         $this->middleware('auth:admin');
    }
    public function index()
    {
        $data['page_title']='Workshop Tab';
        //$data['main']=Workshop::all();
       // return view('admin.workshoptab',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    { 
        $data['workshop']= Workshop::findorfail($request->workshop_id);
          $data['page_title']='Workshop Tab';
        return view('admin.addworkshoptab',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'workshop_id'=>'required|exists:workshops,id',
            'title'=>'required',
//            'description'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg|max:20480',
            'video' => 'mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);
        $mm=Input::only('workshop_id','title','description');
        if($request->hasFile('image'))
        {
            $photo= $request->image;            
            $filename = $photo->store('workshoptab/images/');
            $mm['image']=  'workshoptab/images/'.$photo->hashName();
        }
        if($request->hasFile('video'))
        {
            $photo= $request->video;           
            $filename = $photo->store('workshoptab/video/');
            $mm['video']=  'workshoptab/video/'.$photo->hashName();
        }
        Workshoptab::create($mm);
        return response()->json(['success'=>true,'msg'=>'Saved successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workshoptab  $workshoptab
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data['main']=Workshop::findorfail($id);
         $data['page_title']='Workshop Tab';
        return view('admin.workshoptab',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workshoptab  $workshoptab
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Workshoptab $workshoptab)
    {
        $data['workshop']= Workshop::findorfail($request->workshop_id);
        $data['page_title']='Workshop tab';
        $data['workshoptab']=$workshoptab;
        return view('admin.editworkshoptab',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workshoptab  $workshoptab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workshoptab $workshoptab)
    {
         $request->validate([
            'workshop_id'=>'required|exists:workshops,id',
            'title'=>'required',
//            'description'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg|max:20480',
            'video' => 'mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);
        $mm=Input::only('workshop_id','title','description');
        if($request->hasFile('image'))
        {
             Storage::delete($workshoptab->image);
            $photo= $request->image;            
            $filename = $photo->store('workshoptab/images/');
            $mm['image']=  'workshoptab/images/'.$photo->hashName();
        }
        if($request->hasFile('video'))
        {
            Storage::delete($workshoptab->video);
            $photo= $request->video;            
            $filename = $photo->store('workshoptab/video/');
            $mm['video']=  'workshoptab/video/'.$photo->hashName();
        }
        $workshoptab->fill($mm)->save();
        return response()->json(['success'=>true,'msg'=>'updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workshoptab  $workshoptab
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workshoptab $workshoptab)
    {
//        $workshop->status=0;
        Storage::delete($workshoptab->image);
Storage::delete($workshoptab->video);
        $workshoptab->delete();
       return response()->json(['success'=>true,'msg'=>'deleted successfully']);
    }
}
