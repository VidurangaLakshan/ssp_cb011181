<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function index()
    {
        if (Auth::check() && auth()->user()->role->value == 1) {
            return view('windmill-admin.order.index', [
                'orders' => Order::orderBy('id', 'DESC')->where('payment_status', 'Paid')->get()
            ]);
        } else {
            abort(403, 'Unauthorized Access');
        }
    }

    public function edit(Order $order)
    {
        if (Auth::check() && auth()->user()->role->value == 1) {
            return view('windmill-admin.order.form', [
                'order' => $order,
            ]);
        } else {
            abort(403, 'Unauthorized Access');
        }
    }

    public function update(Request $request, Order $order)
    {
        $order->status = $request->status;
        $order->update();

        return redirect()->route('admin.order.index')->with('success', 'Order Updated Successfully!');
    }

    public function show(Order $order)
    {
        return view('pages.order-success', [
            'order' => $order,
        ]);
    }

    public function view(Request $request, Order $order)
    {
//        dd($request->getPathInfo(), substr($request->getPathInfo(), 12));
//        substr($request->getPathInfo(), '/order-view/', 1)
        $order = Order::where('id', substr($request->getPathInfo(), 12))->first();
        return view('pages.order-view', [
            'order' => $order,
        ]);
    }


    public function store(Request $request)
    {
        $cart = Cart::where('user_id', auth()->user()->id)->where('is_paid', false)->first();

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

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('admin.order.index')->with('success', 'Order Deleted Successfully!');

    }
}
