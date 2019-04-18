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
        $customer->user_id = 1;
        $customer->email = request('email');
        $customer->telephone = request('telephone');

        $customer->save();


        return view('customer.accountCreated');

    }

    public function show()
    {
        $customer = Customer::all();

        return view('customer.deleteCustomerForm', ['customer' => $customer]);
    }

    public function modifyCustomer()
    {
        $id = request('id');
        $customer = customer::where('id', $id)->get();
        return view('customer.customerForm', ['customer' => $customer]);

    }

    public function deleteCustomer($id) {
        $customer = Customer::where($id);
        $customer->delete();
        return redirect('customer/customerForm');
    }

}




