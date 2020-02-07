<?php

namespace App\Http\Controllers;

use App\Roadmap;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RoadmapController extends Controller
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
         $data['page_title']='Roadmap';
        $data['main']=Roadmap::all();
        return view('admin.roadmap',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data['page_title']='Roadmap';
        $data['category']=Category::all();
        return view('admin.addroadmap',$data);
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
            'category_id'=>'required|exists:categories,id',
            'title'=>'required|unique:roadmaps',
            'url'=>'required|unique:roadmaps',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:20480'
        ]);
        $mm=Input::only('category_id','title','url','metahtml','description','video');
         if($request->hasFile('cover_image'))
        {
            $photo= $request->cover_image;            
            $filename = $photo->store('public/roadmap/');
            $mm['cover_image']=  'roadmap/'.$photo->hashName();
        }
        $mm['status']=$request->status?1:0;
        Roadmap::create($mm);
        return response()->json(['success'=>true,'msg'=>'Saved successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function show(Roadmap $roadmap)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function edit(Roadmap $roadmap)
    {
        $data['page_title']='Roadmap';
        $data['category']=Category::all();
        $data['roadmap']=$roadmap;
        return view('admin.editroadmap',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roadmap $roadmap)
    {
        $request->validate([
            'category_id'=>'required|exists:categories,id',
            'title'=>'required|unique:roadmaps,title,'.$roadmap->id,
            'url'=>'required|unique:roadmaps,url,'.$roadmap->id,
            'cover_image' => 'image|mimes:jpeg,png,jpg|max:20480'
        ]);
        $mm=Input::only('category_id','title','url','metahtml','description','video');
         if($request->hasFile('cover_image'))
        {
            $photo= $request->cover_image;            
            $filename = $photo->store('public/roadmap/');
            $mm['cover_image']=  'roadmap/'.$photo->hashName();
        }
        $mm['status']=$request->status?1:0;
        $roadmap->fill($mm)->save();
        return response()->json(['success'=>true,'msg'=>'Update successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roadmap $roadmap)
    {
        $roadmap->status=0;
        $roadmap->save();
       return response()->json(['success'=>true,'msg'=>'Deactivated successfully']);
    }
}
