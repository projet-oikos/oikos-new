<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subscribingnewsletter;



class SubscribingNewsletterController extends Controller
{
    public function show()
    {
        return view('newsletter/subscribingnewsletter');
    }

    public function store(){
        $contact_msg=new subscribingnewsletter();
        $contact_msg->email=request('email');
        $contact_msg->save();
        return view ('subscribingnewsletter');
    }

    public function merci(){
        return view('merci');
    }



}
