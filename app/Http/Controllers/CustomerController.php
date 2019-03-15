<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Customer;
use Illuminate\Support\Facades\Gate;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $customers = Customer::all();

        return view('customer.index', ['customers' => $customers]);
    }

    public function edit()
    {
        $id = \request("id");
        $customer = Customer::findOrFail($id);

        return view('customer.edit', ['customer' => $customer]);
    }

    public function update()
    {
        $id = \request("id");
        $customer = Customer::findOrFail($id);

        $customer->lastname = \request("lastname");
        $customer->name = \request("name");
        $customer->phone = \request("phone");
        foreach ($customer->addresses()->get() as $address)
        {

            $address->number = \request('number'.$address->id);
            $address->address = \request('address'.$address->id);
            $address->complement = \request('complement'.$address->id);
            $address->nap = \request('nap'.$address->id);
            $address->city = \request('city'.$address->id);
            $address->country = \request('country'.$address->id);
            $address->save();
        }

        $customer->save();

        return redirect()->action("CustomerController@index");
    }

    public function delete()
    {
        $id = \request("id");

        $customer = Customer::findOrFail($id);

        foreach($customer->addresses as $address){
            $address->delete();
        }

        $user = $customer->users;

        if($user){
            $user->delete();
        }
        foreach($customer->reviews as $review){
            $review->delete();
        }


        $customer->delete();

        return redirect()->action("CustomerController@index");

    }

    public function create()
    {
        return view('customer.customerForm');
    }

    /**
    public function insert(){
        $customer = new customer();
        $customer->lastname =
        $customer->name =
        $customer->phone =
        $customer->phone =
        $customer->phone =

    }
**/

    public function show()
    {

        $id = \request("id");
        $customer = Customer::findOrFail($id);
        return view('customer.show', ['customer' => $customer]);
    }



}




