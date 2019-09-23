<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormatMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactFromController extends Controller
{
    //

    public function create(){
        return view('contact.create');
    }
    public function store(){


$data=request()->validate([

    'name'=>'required',
    'email'=>'required|email',
    'message'=>'required',

]);

        //send an  mail

        Mail::to('test@test.com')->send(new ContactFormatMail($data));

        

        return redirect('contact')->with('message','Thanks For your message. We will be in touch.');
    }
}
