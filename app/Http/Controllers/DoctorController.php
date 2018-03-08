<?php

namespace App\Http\Controllers;

use Validator;
use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function doctors()
    {
        return view('doctor.index');
    }

    public function add()
    {
        return view('doctors.add_doctor');
    }

    public function add_doctor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'martial_status' => 'required',
            'DOB' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
//            'commission' => 'required',
        ]);

        Doctor::create($request->all());

//        $doctors = new Doctor();
//        $doctors->title = $request->title;
//        $doctors->first_name = $request->first_name;
//        $doctors->last_name = $request->last_name;
//        $doctors->address = $request->address;
//        $doctors->nationality = $request->nationality;
//        $doctors->martial_status = $request->martial_status;
//        $doctors->gender = $request->gender;
//        $doctors->DOB = $request->DOB;
//        $doctors->phone_number = $request->phone_number;
//        $doctors->email = $request->email;
//        $doctors->save();

        dd($request->all());

    }

}
