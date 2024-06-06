<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', function() {
    $products = \App\Models\Product::all();
    return response()
        ->json([
        'products' => $products
    ]);
});

Route::get('/users', function() {
    $users = \App\Models\User::all();
    return response()
        ->json([
        'users' => $users
    ]);
});
