<?php

namespace App\Http\Controllers;

use App\Http\Requests\WishlistRequest;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function index()
    {
        return view('pages.wishlist', [
            'wishlist' => Wishlist::where('user_id', auth()->id())->get(),
        ]);
    }

    public function create()
    {
        Wishlist::create([
            'user_id' => new Wishlist(),
            'product_id' => 1,
            'quantity' => 1,
        ]);
        return view('pages.home', [
            'wishlist' => new Wishlist(),
            'purpose' => 'Create Wishlist',
        ]);
    }

    public function store(WishlistRequest $request)
    {
        return Wishlist::create($request->validated());
    }

    public function show(Wishlist $wishlist)
    {
        return $wishlist;
    }

    public function update(WishlistRequest $request, Wishlist $wishlist)
    {
        $wishlist->update($request->validated());

        return $wishlist;
    }

    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();

        return response()->json();
    }
}
