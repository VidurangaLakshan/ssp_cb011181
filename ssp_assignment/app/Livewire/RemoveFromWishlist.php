<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class RemoveFromWishlist extends Component
{

    public Product $product;

    public function toggleRemoveFromWishlist()
    {

        $user = auth()->user();

        $user->inWishlist()->detach($this->product->id);
        
    }

    public function render()
    {
        return view('livewire.remove-from-wishlist');
    }
}
