<?php

namespace App\Http\Controllers;
use App\Brand;
use App\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {


        $brands = Brand::all();

        //we return all data to our Home view
        return view('home.index', ['brands' => $brands]);
    }

    public function create(){
        return view('home.create');
    }


    public function store(){
        $brand = new Brand();
        $brand->name = request('name');
        $brand->title = request('title');
        $brand->subtitle = request('subtitle');
        $brand->image = request('image');

        $brand->save();

        $brands = Brand::all();

        return view('home.index', ['brands' => $brands]);



    }

}

