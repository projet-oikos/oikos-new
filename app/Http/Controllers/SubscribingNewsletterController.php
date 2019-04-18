<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribingnewsletter;



class SubscribingNewsletterController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth') ->except(['show']);

    }

    public function show()
    {
        return view('newsletter/subscribingnewsletter');
    }

    public function store(){
        $mail_address=new Subscribingnewsletter();
        $mail_address->email=request('email');
        $mail_address->save();
        return view ('newsletter.merci');
    }




}
