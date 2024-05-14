<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class UserWishlist extends Component
{
    public Product $product;
    public int $quantity;


    public function toggleAddToWishlist()
    {
        if (auth()->guest()) {
            return redirect()->route('login');
        }

        $user = auth()->user();


        if ($user->hasAddedToWishlist($this->product)) {
            $user->inWishlist()->detach($this->product->id);
            return;
        }

        $user->inWishlist()->attach($this->product->id);
    }
    public function render()
    {
        return view('livewire.user-wishlist');
    }
}
