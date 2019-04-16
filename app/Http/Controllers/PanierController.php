<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewPanier()
    {

    }

    /**
     *
     */
    public function updatePanier() {
        request('quantity');
    }
}
