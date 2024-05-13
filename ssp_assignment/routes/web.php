<?php

use App\Enums\Role;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('pages.home');
})->name('home');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return redirect()->route('home');
    })->name('dashboard');

    Route::get('/dashboards', function () {
        return view('dashboard');
    })->name('dashboards');

    Route::resource(
        'user',
        \App\Http\Controllers\UserController::class
    );

    Route::resource(
        'product',
        \App\Http\Controllers\ProductController::class
    );

    Route::resource(
        'product-category',
        \App\Http\Controllers\ProductCategoryController::class
    );

});


/**
 * Admin Panel Routes
 */

Route::get('/admin/dashboard', function () {
    return view('windmill-admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/user', function () {
    return view('windmill-admin.user.index', [
        'users' => User::orderBy('id','DESC')->paginate(10),
    ]);
})->name('admin.user.index');

Route::get('/admin/product', function () {
    return view('windmill-admin.product.index', [
        'products' => \App\Models\Product::orderBy('id','ASC')->paginate(10),
    ]);
})->name('admin.product.index');





Route::get('/products', function () {
    return view('pages.product');
})->name('products');










//Route::get('/sample', function () {
//    return view('sample');
//});
//
//Route::get('/product', function () {
//    return view('product');
//});
