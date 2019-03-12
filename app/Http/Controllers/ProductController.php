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

    public function viewProduct()
    {
        $id = request()->route('id');                                                                            // definit l'id par la route utilise
        $anyreview = review::all();


        if ($id) {
            $product = Product::find($id);                                                                              // Si l'ID route correspond a l'ID product alors GET
        } else {
            return redirect()->action('CatalogController@viewCatalog');                                          // Sinon si pas d'ID product !! renvois et affiche sur le catatlog
        }
        return view('product.product', ['product' => $product, 'anyreview' => $anyreview]);                       // Affiche le product et la review corresondant a l'ID product


    }

    public function createProduct()
    {                                                                                                                   //Fonction pour le formulaire de cration de nouveau produit
        $anybrand = Brand::all();
        return view('product.create', ['anybrand' => $anybrand]);                                                  //Affiche le formulaire a l'admin
    }

    public function storeProduct(Request $request )
    {
                                                                                                                        //Fonction pour le formulaire qui vas stocker les donnees
        $brand = Brand::find(request('brand'));
        $brandName = strtolower(str_replace(" ", "_", $brand->name));
        $product = new Product();
        $product->brand_id = $brand->id;
        $product->name = request('name');
        $product->price = request('price');
        $product->weight = request('weight');
        for ($i = 1; $i < 5; $i++) {                                                                                    //Boucle for qui vas parcourir les photos de mon formulaire
            $file = $request->file('image' . $i);

            if ($file) {
                if ($i != null) {
                    $ext = $file->getClientOriginalExtension();
                    $newName = strtolower(str_replace(" ", "_", $product->name) . "_0" . $i . "." . $ext);
                    $file->move('img\\' . $brandName, $newName);

                    switch ($i) {
                        case 1:
                            $product->image1 = 'img/' . $brandName . '/' . $newName;
                            break;
                        case 2:
                            $product->image2 = 'img/' . $brandName . '/' . $newName;
                            break;
                        case 3:
                            $product->image3 = 'img/' . $brandName . '/' . $newName;
                            break;
                        case 4:
                            $product->image4 = 'img/' . $brandName . '/' . $newName;
                            break;
                    }
                }
            }
        }
        $product->video = request('video');
        $product->description = request('description');
        $product->pdf = request('pdf');
        $product->stock = request('stock');
        $product->category = request('category');
        $product->save();

        return redirect('productList');                                                                             //renvois sur la liste de produit
    }

    public function productList()
    {
        $anyProduct = Product::all();

        return view('product.productList', ['anyProduct' => $anyProduct]);
    }


    public function editProduct($id)
    {                                                                                                                   //Fonction pour le formulaire qui vas prérmplir le formulaire du produit a modifier
        $brand = Brand::find(request('brand'));

        $product = Product::find($id);

        return view('product.edit', compact('product'), ['brand' => $brand]);
    }

    public function updateProduct(Request $request, $id)
    {
        $brand = Brand::find(request('brand'));
        $brandName = strtolower(str_replace(" ", "_", $brand->name));
        $product = Product::find($id);
        $productName = $request->input('name');
        $productPrice = $request->input('price');
//        $file = $request->file('image');

        for ($i = 1; $i < 5; $i++) {                                                                                    //Boucle for qui vas parcourir les photos de mon formulaire
            $file = $request->file('image' . $i);
            if ($file) {
                if ($i != null) {
//                    $ext = $file->getClientOriginalExtension();
//                    $productName = strtolower(str_replace(" ", "_", $product->name) . "_0" . $i . "." . $ext);
//                    $file->move('img\\' . $brandName, $productName);
                    $file->move('img\\' . $brandName, $file->getClientOriginalName());
                    $productImage = 'img/' . $brandName . '/' . $file->getClientOriginalName();
                    $product->image = $productImage;

                    switch ($i) {
                        case 1:
                            $product->image1 = 'img/' . $brandName . '/' . $productName;
                            break;
                        case 2:
                            $product->image2 = 'img/' . $brandName . '/' . $productName;
                            break;
                        case 3:
                            $product->image3 = 'img/' . $brandName . '/' . $productName;
                            break;
                        case 4:
                            $product->image4 = 'img/' . $brandName . '/' . $productName;
                            break;
                    }
                    $product->name = $productName;
                    $product->price = $productPrice;
                    $product->save();
                    return redirect('product/' . $id . '/edit');

                }
            }
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroyProduct($id)
    {

        $product = Product::find($id);
        $product->delete();

        return redirect('productList');
    }
}


