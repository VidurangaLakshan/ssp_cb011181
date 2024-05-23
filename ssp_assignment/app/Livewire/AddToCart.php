<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;

class AddToCart extends Component
{
    public Product $product;

    public $quantity = 1;

    public function IncreaseQuantity()
    {
        $this->quantity++;
    }

    public function DecreaseQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function addToCart()
    {

        if (auth()->guest()) {
            return redirect()->route('login');
        }

        $user = auth()->user();

        $total = $this->product->price * $this->quantity;

        $cart = Cart::where('is_paid', false)->where('user_id', auth()->user()->id)->first();

        if ($cart == null) {
            Cart::create([
                'user_id' => auth()->user()->id,
                'item_count' => 0,
                'sub_total' => 0,
                'total' => 0,
                'is_paid' => false,
            ]);
        }

//        return redirect()->route('cart.update', $this->product, $this->quantity, $total);
        return redirect()->route('cart.update', [
            'id' => $this->product->id,
            'param2' => $this->quantity,
            'param3' => $total
        ]);

    }

    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
