<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContactusController extends Controller
{
    
    public function store(Request $request)
    {
         $request->validate([
//          'email'=>'required|unique:contactuses',
            'email'=>'required',
            'name'=>'required',
            'message'=>'required',
        ]
//          ['email.unique'=>'We will contact you shortly.']
                           );
        $mm=Input::only('email','name','message');
        Contactus::create($mm);
        return response()->json(['success'=>true,'msg'=>'We will contact you shortly']);
    }

    
}
