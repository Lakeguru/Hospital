<?php

namespace App\Http\Controllers;

use App\Session;
use Validator;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function login()
    {
        return view('Admin.login');
    }

    public function postlogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'email' => 'required',
        ]);

        dd($request);
        if(!Auth::attempt($request->only(['email','password']), $request->has('remember'))) {

            return redirect()->back()->with('error', 'Could not sign you in with those details!');
        }

//        return redirect()->route('home');
        dd(welcome);

    }
}
