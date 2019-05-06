<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientmessage;
use Illuminate\Support\Facades\Crypt;

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
        $contact_msg->name= Crypt::encryptString(request('name'));
        $contact_msg->email= Crypt::encryptString(request('email'));
        $contact_msg->subject= Crypt::encryptString(request('subject'));
        $contact_msg->message= Crypt::encryptString(request('message'));

        $contact_msg->save();
        return view ('contact/contact');
    }



}