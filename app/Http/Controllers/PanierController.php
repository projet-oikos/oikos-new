<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PanierController extends Controller
{


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewPanier() {

$product = Product::find(request()->route('id'));                                                                              // definit l'id par la route utilise
//    dd($product);
//        $totauxPanier = $this->calculPanier($panier, $livraison, $tva);
$cart[] = $product;
        return view('panier',['cart' => $cart]);
    }

    /**
     * @param $panier
     * @param $livraison
     * @param $tva
     * @return array
     */
//    public function calculPanier($request, $livraison, $tva) {
//
//        return ['total' => $total, 'total_tva' => $total_tva, 'total_ht' => $total_ht];
//    }

    /**
     *
     */
    public function updatePanier() {
        request('quantity');
    }
}
