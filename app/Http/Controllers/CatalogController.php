<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function viewCatalog()
    {
        /*
         *  Old method (SQL)
         *  $catalog = DB::select('select * from product' );
         */

        $catalog = Product::all();
        ///////////////////////////    Le catalogue doit montrer tout les produits       //////////////////////////////////////////////////

        return view('product.catalog', ["catalog" => $catalog]);
    }

    public function addToCart() {


        
    }

    public function viewWaterProduct (){
        $catalog = DB::table('product')->where('Category', 'Eau')->get();
        return view('product.catalog', ["catalog" => $catalog]);
    }
    public function viewFoodProduct (){
        $catalog = DB::table('product')->where('Category', 'Nourriture')->get();
        return view('product.catalog', ["catalog" => $catalog]);
    }

    public function viewHeatingProduct (){
        $catalog = DB::table('product')->where('Category', 'Chauffage')->get();
        return view('product.catalog', ["catalog" => $catalog]);
    }

    public function viewElectricProduct (){
        $catalog = DB::table('product')->where('Category', 'Electricité')->get();
        return view('product.catalog', ["catalog" => $catalog]);
    }
}





