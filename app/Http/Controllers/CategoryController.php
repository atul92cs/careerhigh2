<?php

namespace App\Http\Controllers;

use App\Category;
use App\Roadmap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
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
        $data['page_title']='Category';
        $data['main']=Category::orderBy('shuffle_id')->get();
        return view('admin.category',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'title'=>'required|unique:categories',
            'url'=>'required|unique:categories',
             'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:20480'
        ]);
        $mm=Input::only('title','url','metahtml');
         if($request->hasFile('cover_image'))
        {
            $photo= $request->cover_image;            
            $filename = $photo->store('public/category/');
            $mm['cover_image']=  'category/'.$photo->hashName();
        }
        $mm['shuffle_id']=Category::all()->count()+1;
        $mm['status']=$request->status?1:0;
        Category::create($mm);
        return response()->json(['success'=>true,'msg'=>'Saved successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
//        dd($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        
    }
    public function suffle(Request $request)
    {
         $request->validate([
            'tochange'=>'required|exists:categories,id',
            'fromchange'=>'required|exists:categories,id',
            'type' => 'required'
        ]);
        
        
            $from=Category::findorfail($request->fromchange);
            $fromsuffle_id=$from->shuffle_id;
        
            $to=Category::findorfail($request->tochange);
            $tosuffle_id=$to->shuffle_id;
        
            $from->shuffle_id=$tosuffle_id;
            $from->save();
        
            $to->shuffle_id=$fromsuffle_id;
            $to->save();
        
        return response()->json(['success'=>true,'msg'=>'Updated successfully']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
         $request->validate([
            'title'=>'required|unique:categories,title,'.$category->id,
            'url'=>'required|unique:categories,url,'.$category->id,
             'cover_image' => 'image|mimes:jpeg,png,jpg|max:20480'
        ]);
        $mm=Input::only('title','url','metahtml');
        if($request->hasFile('cover_image'))
        {
            $photo= $request->cover_image;            
            $filename = $photo->store('public/category/');
            $mm['cover_image']=  'category/'.$photo->hashName();
        }
        $mm['status']=$request->status?1:0;
        $category->fill($mm)->save();
        return response()->json(['success'=>true,'msg'=>'Updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
//        $plucked = $category->roadmap->pluck('id');
//        Roadmap::wherein('id',$plucked)->delete();
//       $category->delete();
        $category->status=0;
        $category->save();
       return response()->json(['success'=>true,'msg'=>'Deactivated successfully']);
    }
}
