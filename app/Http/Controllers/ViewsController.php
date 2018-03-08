<?php

namespace App\Http\Controllers;

use Validator;
use App\Email;
use App\Contact;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //
    public  function index()
    {
        return view('pages.index');
    }

    public  function service()
    {
        return view('pages.service');
    }

    public function contact( )
    {
        return view('contacts.contact');
    }

    public function getcontact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        
        dd($request->all());
    }

    public  function email(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $email = new Email();
        $email->name = $request->name;
        $email->email = $request->email;
        $email->save();

        dd($request->all());
    }

    public function doctors()
    {
        return view('doctors.doctor');
    }

    public function department()
    {
        return view('departments.department');
    }

    public  function about()
    {
        return view('abouts.about');
    }

    public function faqs()
    {
        return view('faqs.faq');

    }

    public function galary()
    {
        return view('galarys.galary');
    }

    public function pricelist()
    {
        return view('pricelists.pricelist');
    }


}
