<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        $cart = Cart::where('user_id', auth()->user()->id)->where('is_paid', false)->first();

//        $request->validate([
//            'shipping_first_name' => 'required',
//            'shipping_last_name' => 'required',
//            'shipping_address' => 'required',
//            'shipping_post_code' => 'required',
//            'shipping_city' => 'required',
//            'shipping_mobile' => 'required',
//        ]);


        $order = Order::create([
            'user_id' => auth()->user()->id,
            'cart_id' => $cart->id,
            'shipping_first_name' => $request->input('shipping_first_name'),
            'shipping_last_name' => $request->input('shipping_last_name'),
            'shipping_address' => $request->input('shipping_address'),
            'shipping_post_code' => $request->input('shipping_post_code'),
            'shipping_city' => $request->input('shipping_city'),
            'shipping_mobile' => $request->input('shipping_mobile'),
            'payment_status' => 'Not Paid',
            'status' => 'Pending',
            'total' => $cart->sub_total
        ]);

//        $cart->is_paid = true;
//        $cart->update();

        return redirect()->route('stripe.payment', ['id' => $order->id, 'total' => $cart->sub_total]);
    }
}
