<?php

namespace App\Http\Controllers;

use App\Availableworkshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use storage;

class AvailableworkshopController extends Controller
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
        $data['page_title']='Available Workshop';
        $data['main']=Availableworkshop::all();
        return view('admin.availableworkshop',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data['page_title']='Workshop';
        return view('admin.addavailableworkshop',$data);
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
            'title'=>'required|unique:workshops',
            'image' =>'required|image|mimes:jpeg,png,jpg|max:20480',
            'url'=>'required|unique:workshops',
        ]);
        $mm=Input::only('title','description','url','metahtml');
        if($request->hasFile('image'))
        {
            $photo= $request->image;            
            $filename = $photo->store('public/availworkshop/');
            $mm['image']=  'availworkshop/'.$photo->hashName();
        }
        $mm['status']=$request->status?1:0;
        Availableworkshop::create($mm);
        return response()->json(['success'=>true,'msg'=>'Saved successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Availableworkshop  $availableworkshop
     * @return \Illuminate\Http\Response
     */
    public function show(Availableworkshop $availableworkshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Availableworkshop  $availableworkshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Availableworkshop $availableworkshop)
    {
        $data['page_title']='Available Workshop';
        $data['workshop']=$availableworkshop;
        return view('admin.editavailableworkshop',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Availableworkshop  $availableworkshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Availableworkshop $availableworkshop)
    {
          $request->validate([
            'title'=>'required|unique:workshops,title,'.$availableworkshop->id,
//            'image' =>'required|image|mimes:jpeg,png,jpg|max:20480',
            'url'=>'required|unique:workshops,url,'.$availableworkshop->id, 
        ]);
        $mm=Input::only('title','description','url','metahtml');
        if($request->hasFile('image'))
        {
            $photo= $request->image;            
            $filename = $photo->store('public/availworkshop/');
            $mm['image']=  'availworkshop/'.$photo->hashName();
        }
        $mm['status']=$request->status?1:0;
        $availableworkshop->fill($mm)->save();
        return response()->json(['success'=>true,'msg'=>'Update successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Availableworkshop  $availableworkshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Availableworkshop $availableworkshop)
    {
         $availableworkshop->status=0;
        $availableworkshop->save();
       return response()->json(['success'=>true,'msg'=>'Deactivated successfully']);
    }
}
