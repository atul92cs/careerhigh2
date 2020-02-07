<?php

namespace App\Http\Controllers;

use App\Upcommingroadmap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UpcommingroadmapController extends Controller
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
         $data['page_title']='Upcoming Roadmap';
        $data['main']=Upcommingroadmap::all();
        return view('admin.upcoming',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'title'=>'required|unique:upcommingroadmaps',
             'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:20480',
             'cover_image1' => 'image|mimes:jpeg,png,jpg|max:20480'
        ]);
        $mm=Input::only('title','description');
         if($request->hasFile('cover_image'))
        {
            $photo= $request->cover_image;            
            $filename = $photo->store('public/upcommingroadmap/');
            $mm['cover_image']=  'upcommingroadmap/'.$photo->hashName();
        }if($request->hasFile('cover_image1'))
        {
            $photo= $request->cover_image1;            
            $filename = $photo->store('public/upcommingroadmap/');
            $mm['cover_image1']=  'upcommingroadmap/'.$photo->hashName();
        }
        $mm['status']=$request->status?1:0;
        Upcommingroadmap::create($mm);
        return response()->json(['success'=>true,'msg'=>'Saved successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Upcommingroadmap  $upcommingroadmap
     * @return \Illuminate\Http\Response
     */
    public function show(Upcommingroadmap $upcommingroadmap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Upcommingroadmap  $upcommingroadmap
     * @return \Illuminate\Http\Response
     */
    public function edit(Upcommingroadmap $upcommingroadmap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Upcommingroadmap  $upcommingroadmap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upcommingroadmap $upcommingroadmap)
    {
        $request->validate([
             'title'=>'required|unique:upcommingroadmaps,title,'.$upcommingroadmap->id,
             'cover_image' => 'image|mimes:jpeg,png,jpg|max:20480',
             'cover_image1' => 'image|mimes:jpeg,png,jpg|max:20480'
        ]);
        $mm=Input::only('title','description');
        if($request->hasFile('cover_image'))
        {
            $photo= $request->cover_image;            
            $filename = $photo->store('public/upcommingroadmap/');
            $mm['cover_image']=  'upcommingroadmap/'.$photo->hashName();
        }if($request->hasFile('cover_image1'))
        {
            $photo= $request->cover_image1;            
            $filename = $photo->store('public/upcommingroadmap/');
            $mm['cover_image1']=  'upcommingroadmap/'.$photo->hashName();
        }
        $mm['status']=$request->status?1:0;
        $upcommingroadmap->fill($mm)->save();
        return response()->json(['success'=>true,'msg'=>'Updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Upcommingroadmap  $upcommingroadmap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upcommingroadmap $upcommingroadmap)
    {
        $upcommingroadmap->status=0;
        $upcommingroadmap->save();
       return response()->json(['success'=>true,'msg'=>'Deactivated successfully']);
    }
}
