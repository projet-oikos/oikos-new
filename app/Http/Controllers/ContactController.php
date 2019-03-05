<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientmessage;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact/contact');
    }


 /*   public function create()
    {
        return view(client_message . create);
    }*/

    public function store(){
        $contact_msg=new clientmessage();
        $contact_msg->name=request('name');
        $contact_msg->email=request('email');
        $contact_msg->subject=request('subject');
        $contact_msg->message=request('message');
        $contact_msg->save();
        return view ('contact/contact');
    }



}