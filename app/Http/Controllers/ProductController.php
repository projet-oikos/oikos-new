<?php

namespace App\Http\Controllers;

use App\Product;
use App\Brand;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProductController extends Controller

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function viewProduct(){
      $id = request()->route('id');                                                                              // definit l'id par la route utilise

       $anyproduct = Product::all();
       $anyreview = review::all();


        if ($id) {
            $anyproduct = Product::where('id', $id)->get();                                                             // Si l'ID route correspond a l'ID product alors GET
        } else {
            return redirect()->action('CatalogController@viewCatalog');                                            // Sinon si pas d'ID product !! renvois et affiche sur le catatlog
        }
        return view('product',['anyproduct' => $anyproduct , 'anyreview' => $anyreview ]);                         // Affiche le product et la review corresondant a l'ID product


    }

    public function createProduct() {                                                                                   //Fonction pour le formulaire de cration de nouveau produit
        $anybrand = Brand::all();
        return view('formProduct', ['anybrand'=>$anybrand]);                                                                                //Affiche le formulaire a l'admin
    }

    private function storeImage(){

        $file = $request->file('image1');
        $file->move('img\\' . $Brand,$file->getClientOriginalName());
    }

    public function storeProduct(Request $request) {                                                                     //Fonction pour le formulaire qui vas stocker les donnees

        $product = new Product();
        $product->brand_id = request('brand');
        $product->name = request('name');
        $product->price = request('price');
        $product->image1 = request('image1');
        $product->image2 = request('image2');
        $product->image3 = request('image3');
        $product->image4 = request('image4');
        $product->video = request('video');
        $product->description = request('description');
        $product->pdf = request('pdf');
        $product->stock = request('stock');
        $product->category = request('category');

        $product->save();

    }

    public function editProduct($id) {                                                                                    //Fonction pour le formulaire qui vas stocker les review creer via le formulaire
        $product = Product::find($id);

        return view('formProduct');

        $product->modifiate($id);

    }
}
