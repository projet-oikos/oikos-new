<?php

namespace App\Http\Controllers;

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


        if ($id) {
            $anyreview = Review::where('id', $id)->get();
        } else {
            $anyproduct = product::all();
        }
        return view('product',['anyproduct' => $anyproduct , 'anyreview' => $anyreview ]);


    }

    public function create() {
        return view('review.create');
    }

    public function store() {
        $review = new Review();
        $review->review = request('review');
        $review->note = request('note');
        $review->save();
        $anyreview = Review::all();
        return view('anyreview.index',  ['anyreview' => $anyreview = Review::all()]);
    }
}
