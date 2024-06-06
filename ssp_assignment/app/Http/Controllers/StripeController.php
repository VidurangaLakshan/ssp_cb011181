<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function session(Request $request, $id, $total)
    {
        Stripe::setApiKey(config('stripe.sk'));

        $totalInCents = $total * 100;

        $session = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'LKR',
                        'product_data' => [
                            'name' => "Order ID: $id",
                        ],
                        'unit_amount' => $totalInCents,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        $cart = Cart::where('user_id', auth()->user()->id)->where('is_paid', false)->first();

        $order = Order::where('cart_id', $cart->id)->first();
//        $order = Order::where('cart_id', 43)->first();

        $cartProducts = \DB::table('cart_product')->where('cart_id', $cart->id)->get();

        foreach($cartProducts as $cartProduct) {
            $product = Product::find($cartProduct->product_id);
            $currentStock = $product->stock;

            $product->stock = $currentStock - $cartProduct->quantity;
            $product->update();
        }

        $order->payment_status = 'Paid';
        $order->update();

        $cart->is_paid = true;
        $cart->update();

//        return redirect('/order-success', [
//            'order' => $order,
//            'cart' => $cart
//        ]);

        return view('pages.order-success', [
            'order' => $order,
            'cart' => $cart
        ]);
    }
}
