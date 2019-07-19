<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Auth\Access\Gate;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Carbon\Carbon;
use App\Review;
use Illuminate\Support\Facades\DB;

class ReviewController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function storeReview(Request $request)
    {

        $review = new Review();
        $review->review = $request->input('guestReview');
        $review->note = $request->input('note');
        $review->product_id = $request->input('product_id');
        $review->customer_id = 2; //$request->input('customer_id');
        $review->date = Carbon::now();
        $review->save();


        return redirect()->action('ProductController@viewProduct', ['id' => $request->input('product_id')]);
    }

    public function createReview(Request $request)
    {
        $currentProduct = DB::table('product')->where('id', $request->product)->get();


        return view('product.formReviewProduct', ['product' => $currentProduct]);
    }
}