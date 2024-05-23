<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Reactive;
use function PHPUnit\Framework\isEmpty;

class CartController extends Controller
{
    public function index()
    {
        return Cart::all();
    }

    public function show(Cart $cart)
    {
        return $cart;
    }

    public function create()
    {
        //
    }

    public function store()
    {

        if (auth()->guest()) {
            return redirect()->route('login');
        }

        $userId = auth()->id();

        // check if the user has a cart that has status is_paid = false

        $cart = Cart::where('user_id', $userId)
            ->where('is_paid', false)
            ->first();


        if ($cart == null) {
            $cart = Cart::create([
                'user_id' => $userId,
                'item_count' => 0,
                'sub_total' => 0,
                'total' => 0,
                'is_paid' => false,
            ]);
        }

        return redirect()->route('cart.update', $cart);

    }

    public function edit(Cart $cart)
    {

    }

    public function update($product, $quantity, $price)
    {

        if (auth()->guest()){
            return redirect()->route('login');
        }

        $product = Product::find($product);

        $currentProduct = $product;

        $user = auth()->user()->id;

        $cart = Cart::where('user_id', $user)
            ->where('is_paid', false)
            ->first();

        // Get the current item count
        $currentItemCount = $cart->item_count;

        // Add the new quantity to the current item count
        $newItemCount = $currentItemCount + $quantity;

        if ($cart->total + $price < 5000) {

            $cart->item_count = $newItemCount;
            $cart->sub_total = $cart->sub_total + $price;
            $cart->total = $cart->sub_total + 2499.99;
            $cart->is_paid = false;
            $cart->update();

        } else {

            $cart->item_count = $newItemCount;
            $cart->sub_total = $cart->sub_total + $price;
            $cart->total = $cart->total + $price;
            $cart->is_paid = false;
            $cart->update();

        }


// Get all the products in the cart
        $productsInCart = $cart->products;

// Check if the current product exists in the cart


        if ($productsInCart->contains($currentProduct->id)) {
            // The product exists in the cart

            $currentQuantity = DB::table('cart_product')->where('cart_id', $cart->id)->where('product_id', $currentProduct->id)->first()->quantity;
            $newQuantity = $currentQuantity + $quantity;

            $currentPrice = DB::table('cart_product')->where('cart_id', $cart->id)->where('product_id', $currentProduct->id)->first()->price;
            $newPrice = $currentPrice + $price;

            $cart->products()->updateExistingPivot($currentProduct->id, [
                'quantity' => $newQuantity,
                'price' => $newPrice,
            ]);

        } else {

            // The product does not exist in the cart
            $cart->products()->attach($product, [
                'quantity' => $quantity,
                'price' => $price,
            ]);

        }

        return redirect()->back();


    }

    public function remove($product)
    {
        $cart = Cart::where('user_id', auth()->user()->id)->where('is_paid', false)->first();

        $productDetails = DB::table('cart_product')->where('cart_id', $cart->id)->where('product_id', $product)->first();

       $oldItemCount = $cart->item_count;
       $oldSubTotal = $cart->sub_total;


       $QuantityOfProduct = $productDetails->quantity;
       $SubTotalOfProduct = $productDetails->price;

       $cart->item_count = $oldItemCount - $QuantityOfProduct;
       $cart->sub_total = $oldSubTotal - $SubTotalOfProduct;
       $cart->update();

       $cart->products()->detach($product);

        return redirect()->back();
    }


    public function destroy(Cart $cart)
    {
        $cart->delete();

        return response()->json(null, 204);
    }

}
