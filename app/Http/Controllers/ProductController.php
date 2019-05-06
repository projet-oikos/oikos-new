<?php

namespace App\Http\Controllers;

use App\Product;
use App\Brand;
use App\Review;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProductController extends Controller

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

        public function  __construct()
        {
            $this->middleware('auth', ['except' => ['viewProduct']]);
        }

    public function viewProduct()
    {
        $id = request()->route('id');                                                                            // definit l'id par la route utilise
        $userName = DB::table('customer')
            -> join('review', 'customer.id',  '=', 'review.customer_id')                    //on join la table review a la table customer et on verifie que le custumer_id et egale a la review.customer_id
            ->get();
        $review = DB::table('review')->where('product_id', $id)->get();                                   //on met dans review le nombre d'avis correspondant au produit concerné
        $result = 0;
        foreach ($review as $test) {
            $result = $result + $test -> note;
        }
        $nbReview = count($review);
        $average = $result / $nbReview;
        $average = floor($average);
        if ($id) {
            $product = Product::find($id);                                                                              // Si l'ID route correspond a l'ID product alors GET
        } else {
            return redirect()->action('CatalogController@viewCatalog');                                          // Sinon si pas d'ID product !! renvois et affiche sur le catatlog
        }
        return view('product.product', ['product' => $product, 'anyreview' => $userName, 'average' => $average, 'nbReview' => $nbReview] );                       // Affiche le product et la review corresondant a l'ID product
    }

    public function createProduct()
    {    $this->authorize('create', Product::class);                                                   //Fonction pour le formulaire de cration de nouveau produit
        $anybrand = Brand::all();
        return view('product.create', ['anybrand' => $anybrand]);                                                  //Affiche le formulaire a l'admin
    }

    public function storeProduct(Request $request)
    {
        $this->authorize('create', Product::class);                                                    //Fonction pour le formulaire qui vas stocker les donnees
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
        $this->authorize('create', Product::class);
        $anyProduct = Product::all();

        return view('product.productList', ['anyProduct' => $anyProduct]);
    }


    public function editProduct($id)
    {
        $this->authorize('update', Product::class);                                                                                    //Fonction pour le formulaire qui vas prérmplir le formulaire du produit a modifier
        $brand = Brand::find(request('brand'));

        $product = Product::find($id);

        return view('product.edit', compact('product'), ['brand' => $brand]);
    }

    public function updateProduct(Request $request, $id)
    {
        $this->authorize('update', Product::class);
        $brand = Brand::find(request('brand'));
        $brandName = strtolower(str_replace(" ", "_", $brand->name));
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');

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
        $product->video =  $request->input('video');
        $product->description =  $request->input('description');
        $product->pdf =  $request->input('pdf');
        $product->stock =  $request->input('stock');
        $product->category =  $request->input('category');
        $product->save();

return redirect('productList');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroyProduct($id)
    {
        $this->authorize('delete', Product::class);
        $product = Product::find($id);
        $product->delete();

        return redirect('productList');
    }

    public function averageReview(Request $request){
        $review = Review::all();
        dd($review);
        $result = 0;
        for ($i = 0; $i < $review.length(); $i++){
            $result = $result + $review -> note;
        }
//        dd($result);
        $average = $result / $review.length();
        return $average;
    }
}


