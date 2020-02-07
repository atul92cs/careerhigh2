<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='Blog';
        $data['main']=Blog::all();
        return view('admin.blog',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']='Blog';
        return view('admin.addblog',$data);
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
            'author'=>'required',
            'title'=>'required|unique:roadmaps',
            'url'=>'required|unique:roadmaps',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:20480'
        ]);
        $mm=Input::only('author','title','url','metahtml','description');
         if($request->hasFile('cover_image'))
        {
            $photo= $request->cover_image;            
            $filename = $photo->store('public/blog/');
            $mm['cover_image']=  'blog/'.$photo->hashName();
        }
        $mm['status']=$request->status?1:0;
        Blog::create($mm);
        return response()->json(['success'=>true,'msg'=>'Saved successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $data['page_title']='Blog';
        $data['roadmap']=$blog;
        return view('admin.editblog',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
         $request->validate([
//            'author'=>'required',
            'title'=>'required|unique:roadmaps,title,'.$blog->id,
            'url'=>'required|unique:roadmaps,url,'.$blog->id,
            'cover_image' => 'image|mimes:jpeg,png,jpg|max:20480'
        ]);
        $mm=Input::only('author','title','url','metahtml','description');
         if($request->hasFile('cover_image'))
        {
            $photo= $request->cover_image;            
            $filename = $photo->store('public/blog/');
            $mm['cover_image']=  'blog/'.$photo->hashName();
        }
        $mm['status']=$request->status?1:0;
        $blog->fill($mm)->save();
        return response()->json(['success'=>true,'msg'=>'Update successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->status=0;
        $blog->save();
       return response()->json(['success'=>true,'msg'=>'Deactivated successfully']);
    }
}
