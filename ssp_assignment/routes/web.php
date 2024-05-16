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
});



/**
 * Product Routes
 */

Route::resource(
    'product',
    \App\Http\Controllers\ProductController::class
);



/**
 * Wishlist Routes
 */

Route::resource(
    'wishlist',
    \App\Http\Controllers\WishlistController::class
);



/**
 * Category Routes
 */

Route::resource(
    'category',
    \App\Http\Controllers\CategoryController::class
);








/**
 * Admin Panel Routes
 */

/**
 * Dashboard
 */

Route::get('/admin/dashboard', function () {
    return view('windmill-admin.dashboard');
})->name('admin.dashboard');


/**
 * Users
 */

Route::get('/admin/user', function () {
    return view('windmill-admin.user.index', [
        'users' => User::orderBy('id','DESC')->paginate(10),
    ]);
})->name('admin.user.index');


/**
 * Products
 */

Route::get('/admin/product', function () {
    return view('windmill-admin.product.index', [
        'products' => \App\Models\Product::orderBy('id','DESC')->paginate(10),
    ]);
})->name('admin.product.index');

Route::post('/product/{product}/remove-images', [
    \App\Http\Controllers\ProductController::class, 'removeSecondaryImages'
])->name('product.remove-images');


/**
 * Categories
 */

Route::get('/admin/category', function () {
    return view('windmill-admin.category.index', [
        'categories' => \App\Models\Category::orderBy('id','DESC')->paginate(10),
    ]);
})->name('admin.category.index');


