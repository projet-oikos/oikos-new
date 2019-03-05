<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = DB::select('SELECT * FROM customer');

        return view('customer.index', ['customers' => $customers]);
    }

    public function createCustomer()
    {

        return view('customer.customerForm');
    }


    public function storeCustomer()
    {
        $customer = new Customer();
        $customer->lastname = request('lastname');
        $customer->name = request('name');
        $customer->delivery_address_id = request('delivery_address_id');
        $customer->billing_address_id = request('billing_address_id');
        $customer->password = request('password');
        $customer->email = request('email');
        $customer->telephone = request('telephone');

        $customer->save();


        return view('customer.accountCreated');
           // return view('accountCreated', ['customer' => $customer]);

    }

    public function view($id){
        $customer = Post::where('id', $id)->firstOrFail();
        return view('customer', compact('customer'));
    }

}




