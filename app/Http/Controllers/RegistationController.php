<?php

namespace App\Http\Controllers;


use Validator;
use Illuminate\Http\Request;

class RegistationController extends Controller
{
    //
    public function registar()
    {
        return view('Admin.signup');
    }

    public function postregistar(Request $request)
    {
//        if (Auth::check())
//        {
            $validator = Validator::make($request->all(), [
                'name'=> 'required',
                'email' => 'required',
                'password' => 'required|confirmed',
//                'access'=> 'required'
            ]);

            dd($request);
//        }
    }
}

