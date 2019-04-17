<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Requests\StoreBrand;
use App\Product;
use App\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
class PanierController extends Controller

{
    var $test = [];

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewPanier(Request $request)
    {
        $choice = DB::table('product')->where('id', $request->product)->get();

if (!session('product', $choice->id)){
    session::push('product', $choice) ;
}

dd(session('product'));
        return view('panier', ["choice" => session('product')]);
    }

    /**
     *
     */
    public function updatePanier() {
        request('quantity');
    }

    public function remove(Request $request){
     $remove = $choice = DB::table('product')->where('id', $request->id)->get();

        session::forget('product', $remove) ;

        dd(session('product'));

       return view('panier', ["choice" => session('product')]);
    }

}
