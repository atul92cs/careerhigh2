<?php

namespace App\Http\Controllers;

use App\Workshop;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\Input;


class WorkshopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='Workshop';
        $data['main']=Workshop::all();
        return view('admin.workshop',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data['page_title']='Workshop';
        return view('admin.addworkshop',$data);
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
            'location'=>'required',
            'duration'=>'required',
//            'datetime'=>'required|date',
            'tcdesc'=>'required',
            'price'=>'required',
            'subs_limit'=>'required',
            'domain'=>'required',
            'college'=>'required',
            'title'=>'required|unique:workshops',
            'image' =>'required|image|mimes:jpeg,png,jpg|max:20480',
            'url'=>'required|unique:workshops',
        ]);
        $mm=Input::only('location','duration','date','date2','time','time2','tcdesc','price','subs_limit','domain','college','title','description','url','metahtml');
        if($request->hasFile('image'))
        {
            $photo= $request->image;            
            $filename = $photo->store('public/workshop/');
            $mm['image']=  'workshop/'.$photo->hashName();
        }
        $mm['status']=$request->status?1:0;
        Workshop::create($mm);
        return response()->json(['success'=>true,'msg'=>'Saved successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show(Workshop $workshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Workshop $workshop)
    {
        $data['page_title']='Workshop';
        $data['workshop']=$workshop;
        return view('admin.editworkshop',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workshop $workshop)
    {
         $request->validate([
            'location'=>'required',
            'duration'=>'required',
//            'datetime'=>'required',
            'tcdesc'=>'required',
            'price'=>'required',
            'subs_limit'=>'required',
            'domain'=>'required',
            'college'=>'required',
            'title'=>'required|unique:workshops,title,'.$workshop->id,
            'image' =>'image|mimes:jpeg,png,jpg|max:20480',
            'url'=>'required|unique:workshops,url,'.$workshop->id,
        ]);
        $mm=Input::only('location','duration','date','date2','time','time2','tcdesc','price','subs_limit','domain','college','title','description','url','metahtml');
        if($request->hasFile('image'))
        {
            Storage::delete('public/'.$workshop->image);
            $photo= $request->image;            
            $filename = $photo->store('public/workshop/');
            $mm['image']=  'workshop/'.$photo->hashName();
        }
        $mm['status']=$request->status?1:0;
        $workshop->fill($mm)->save();
        return response()->json(['success'=>true,'msg'=>'Saved successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workshop $workshop)
    {
         $workshop->status=0;
        $workshop->save();
       return response()->json(['success'=>true,'msg'=>'Deactivated successfully']);
    }
}
