<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Requests\StoreBrand;
use App\Product;
use App\Order;
use App\OrderProduct;
use App\User;
use Carbon\Carbon;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class PanierController extends Controller

{
    var $test = [];

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View*
     */
    public function viewPanier(Request $request)
    {
        $choice = DB::table('product')->where('id', $request->product)->get();
        $total = 0;

        session::push('product', $choice);
        foreach (session('product') as $item) {
            foreach ($item as $price){
               $total = $total + $price->price;
            }

        }
        $total_ht = $total /1.2;
        $livraison = 6.90;
        $tva = $total*0.2;
        return view('panier', ["choice" => session('product'), "total" => $total, "total_ht" => $total_ht, "livraison" => $livraison, "tva" => $tva]);
    }

    /**
     *
     */
    public function updatePanier()
    {
        request('quantity');
    }

    public function remove(Request $request)
    {
        $remove = $request->id;
        $int = (int)$remove;

        foreach (Session::get('product') as $index => $product) {

            foreach ($product as $item => $test) {

                if ($test->id === $int) {
                    var_dump($test->id);
                    session::forget('product.' . $index);

                }
            }
        }
        return redirect('/cart');
    }
    public function allRemove()
    {
            session::forget('product');
        return redirect('/cart');
    }

    public function addOrder(User $user) {


        $order = new Order();
        $order->orderDate = Carbon::today();
        $order->billDate = Carbon::today();
        $order->customer_id = 1;
        $order->save();
        $test = DB::table('order')
            ->join('customer', 'order.customer_id', '=', 'customer.id')
            ->get();
        foreach ($test as $order) {
           $customer = $order;
        }

        foreach (Session::get('product') as $item) {
            foreach ($item as $product) {

                    $orderProduct = new OrderProduct();
                    $orderProduct->quantity = 1;
                    $orderProduct->product_id = $product->id;
                    $orderProduct->order_id = $customer->id;
                    $orderProduct->save();

            }
        }

       return redirect('/commandeValide');
    }

    public function orderValid() {
        return view('commandeValide');
    }


}
