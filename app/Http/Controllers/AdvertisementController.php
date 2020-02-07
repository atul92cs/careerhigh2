<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdvertisementController extends Controller
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
        $data['page_title']='Advertisement';
        $data['main']=Advertisement::all();
        return view('admin.advertisement',$data);
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
            'title'=>'required|unique:advertisements',
             'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:20480',
             'cover_image1' => 'image|mimes:jpeg,png,jpg|max:20480'
        ]);
        $mm=Input::only('title','description');
         if($request->hasFile('cover_image'))
        {
            $photo= $request->cover_image;            
            $filename = $photo->store('public/advertisement/');
            $mm['cover_image']=  'advertisement/'.$photo->hashName();
        }if($request->hasFile('cover_image1'))
        {
            $photo= $request->cover_image1;            
            $filename = $photo->store('public/advertisement/');
            $mm['cover_image1']=  'advertisement/'.$photo->hashName();
        }
        $mm['status']=$request->status?1:0;
        Advertisement::create($mm);
        return response()->json(['success'=>true,'msg'=>'Saved successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        $request->validate([
             'title'=>'required|unique:advertisements,title,'.$advertisement->id,
             'cover_image' => 'image|mimes:jpeg,png,jpg|max:20480',
             'cover_image1' => 'image|mimes:jpeg,png,jpg|max:20480'
        ]);
        $mm=Input::only('title','description');
        if($request->hasFile('cover_image'))
        {
            $photo= $request->cover_image;            
            $filename = $photo->store('public/advertisement/');
            $mm['cover_image']=  'advertisement/'.$photo->hashName();
        }if($request->hasFile('cover_image1'))
        {
            $photo= $request->cover_image1;            
            $filename = $photo->store('public/advertisement/');
            $mm['cover_image1']=  'advertisement/'.$photo->hashName();
        }
        $mm['status']=$request->status?1:0;
        $advertisement->fill($mm)->save();
        return response()->json(['success'=>true,'msg'=>'Updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $advertisement)
    {
        $advertisement->status=0;
        $advertisement->save();
       return response()->json(['success'=>true,'msg'=>'Deactivated successfully']);
    }
}
