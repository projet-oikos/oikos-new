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

class BrandController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth') ->except(['show']);

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        //$value = $request->session()->get('key');
        $brands = Brand::all();

        //we return all data to our Home view
        return view('home.index', ['brands' => $brands]);
    }

    public function create()
    {
        $this->authorize('create',Brand::class);
        return view('home.create');
    }

    public function store(StoreBrand $request)
    {

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
    private function cleanString($string)
    {
        $cleanedString = strtolower(str_replace(' ', '_', $string));

        return $cleanedString;
    }

    public function brandList()
    {
        $this->authorize('view',Brand::class);
        $brands = Brand::all();
        //we return all data to our Home view
        return view('home.brandlist', ['brands' => $brands]);
    }

    public function edit($id)
    {
        $this->authorize('update',Brand::class);
        $brand = Brand::find($id);
        return view('home.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {

        $brandName = $request->input('name');
        $brandTitle = $request->input('title');
        $brandSubtitle = $request->input('subtitle');
        $file = $request->file('image');

        $brand = Brand::find($id);

        if ($file) {
            $file->move('img\\' . $brandName, $file->getClientOriginalName());
            $brandImage = 'img/' . $brandName . '/' . $file->getClientOriginalName();
            $brand->image = $brandImage;
        }

        $brand->name = $brandName;
        $brand->title = $brandTitle;
        $brand->subtitle = $brandSubtitle;
        $brand->save();

        return redirect('brand/' . $id . '/edit');
    }

    public function destroy($id)
    {
        $this->authorize('delete',Brand::class);
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('brand/brandlist');
    }
}

