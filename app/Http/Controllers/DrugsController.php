<?php

namespace App\Http\Controllers;

use App\Drug;
Use Validator;
use Illuminate\Http\Request;

class DrugsController extends Controller
{
    //
    public function index()
    {
        return view('Drugs.index');
    }

    public function add(Request $request)
    {
        $drug_name = [];

        $validatedData = $request->validate([
            'drug_name' => 'required',
        ]);
        $rand=(integer)$request->random;
        for($i=0; $i<$rand; $i++)
        {
            $rand_num=str_random(15);

             dd($request);

            $drug = new Drug();

//            $drug->drug_name= $rand_num;
            $drug->drug_name = $request->drug_name;
            $drug->drug_pin= $rand_num;
            $drug->save();
        }

        return back();



    }
}
