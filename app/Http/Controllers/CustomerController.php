<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{
    public function index(){
        $customers = DB::select('SELECT * FROM customers');

        return view('customer.index', ['customers' => $customers]);
    }
}
