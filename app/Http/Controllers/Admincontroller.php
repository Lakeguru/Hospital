<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    //
    public function login()
    {
        return view('Admin.login');
    }



    public function signup()
    {
        return view ('Admin.signup');
    }

    public function dashboard()
    {
        return view('Dashboards.index');
    }
}
