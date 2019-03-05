<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Carbon\Carbon;
use App\Review;

class ReviewController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function store(Request $request) {

        $review = new Review();
        $review->review = $request->input('review');
        $review->note = $request->input('note');
        $review->product_id = $request->input('id');
        $review->customer_id = 1;
        $review->date = Carbon::today();
        $review->save();

        return redirect()->action('ProductController@viewProduct', ['id' => $request->input('id')]);
    }




}