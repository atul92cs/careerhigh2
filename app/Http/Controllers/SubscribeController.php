<?php

namespace App\Http\Controllers;

use App\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $data['main']=Blog::all();
//        return view('admin.blog',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        $data['page_title']='Blog';
//        return view('admin.addblog',$data);
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
    public function store(Request $request)
    {
         $request->validate([
            'email'=>'required|unique:subscribes',
        ],
          ['email.unique'=>'You have already subscribed with us.']
                           );
        $mm=Input::only('email');
        $mm['status']=$request->status?1:0;
        Subscribe::create($mm);
        return response()->json(['success'=>true,'msg'=>'Subscribed successfully']);
    }






}
