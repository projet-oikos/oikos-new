<?php

namespace App\Http\Controllers;
use App\Brand;
use App\Product;
use Illuminate\Http\Request;
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

    public function store(Request $request){

        $newBrand = self::cleanString(request('name'));

        $file = $request->file('image');
        $file->move('img\\' . $newBrand, $file->getClientOriginalName());

        $brand = new Brand();
        $brand->name = request('name');
        $brand->title = request('title');
        $brand->subtitle = request('subtitle');
        $brand->image = 'img/' . $newBrand . '/' . $file->getClientOriginalName();

        $brand->save();

        $brands = Brand::all();

        return view('home.index', ['brands' => $brands]);



    }

    /**
     * Clean string
     *
     * @param $string string to be cleaned
     * @return string cleaned string
     */
    private function cleanString($string) {
        $cleanedString = strtolower(str_replace(' ', '_', $string));

        return $cleanedString;
    }
}

