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



Route::resource(
    'garage',
    \App\Http\Controllers\GarageController::class
);

Route::resource(
    'supported-vehicles',
    \App\Http\Controllers\SupportedVehiclesController::class
);

Route::get('/admin/supported-vehicles', [
    \App\Http\Controllers\SupportedVehiclesController::class, 'index'
])->name('supported-vehicles.index');





Route::get('/admin/vehicle-year', [
    \App\Http\Controllers\VehicleYearController::class, 'index'
])->name('vehicle-year.index');


Route::get('/admin/vehicle-year/create', [
    \App\Http\Controllers\VehicleYearController::class, 'create'
])->name('vehicle-year.create');


Route::post('/admin/vehicle-year', [
    \App\Http\Controllers\VehicleYearController::class, 'store'
])->name('vehicle-year.store');

Route::delete('/admin/vehicle-year/{vehicleYear}', [
    \App\Http\Controllers\VehicleYearController::class, 'destroy'
])->name('vehicle-year.destroy');






Route::get('/admin/vehicle-brand', [
    \App\Http\Controllers\VehicleBrandController::class, 'index'
])->name('vehicle-brand.index');


Route::get('/admin/vehicle-brand/create', [
    \App\Http\Controllers\VehicleBrandController::class, 'create'
])->name('vehicle-brand.create');


Route::post('/admin/vehicle-brand', [
    \App\Http\Controllers\VehicleBrandController::class, 'store'
])->name('vehicle-brand.store');

Route::delete('/admin/vehicle-brand/{vehicleBrand}', [
    \App\Http\Controllers\VehicleBrandController::class, 'destroy'
])->name('vehicle-brand.destroy');








Route::get('/admin/vehicle-model', [
    \App\Http\Controllers\VehicleModelController::class, 'index'
])->name('vehicle-model.index');


Route::get('/admin/vehicle-model/create', [
    \App\Http\Controllers\VehicleModelController::class, 'create'
])->name('vehicle-model.create');


Route::post('/admin/vehicle-model', [
    \App\Http\Controllers\VehicleModelController::class, 'store'
])->name('vehicle-model.store');


Route::delete('/admin/vehicle-model/{vehicleModel}', [
    \App\Http\Controllers\VehicleModelController::class, 'destroy'
])->name('vehicle-model.destroy');










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


/**
 * Orders
 */

Route::get('/success', function () {
    return view('pages.order-success');
})->name('order-success');






/**
 * Shop Routes
 */

Route::get('/shop', function () {
    return view('pages.shop', [
        'products' => \App\Models\Product::all()->where('status', '=', 'active'),
        'latestProducts' => \App\Models\Product::orderBy('created_at','DESC')->where('status', '=', 'active')->take(5)->get(),
        'categories' => \App\Models\Category::all(),
        'currentCategory' => 'All Products',
        'garageVehicles' => \App\Models\Garage::where('user_id', auth()->id())->get(),
        'setvehicleModel' => '',
        'setvehicleBrand' => '',
        'setvehicleYear' => '',
    ]);
})->name('shop');


Route::get('/shop/{name}', function () {

    $category = \App\Models\Category::where('name', request()->name)->first();

    return view('pages.shop', [
        'products' => \App\Models\Product::where('category_id', $category->id)->where('status', '=', 'active')->get(),
        'latestProducts' => \App\Models\Product::orderBy('created_at','DESC')->where('status', '=', 'active')->take(5)->get(),
        'categories' => \App\Models\Category::all(),
        'currentCategory' => $category->name,
        'garageVehicles' => \App\Models\Garage::where('user_id', auth()->id())->get(),
        'setvehicleModel' => '',
        'setvehicleBrand' => '',
        'setvehicleYear' => '',
    ]);
});


Route::get('/shop/search/{name}', function () {

    $products = \App\Models\Product::where('name', 'like', '%' . request()->name . '%')->where('status', '=', 'active')->get();

    return view('pages.shop', [
        'products' => $products,
        'latestProducts' => \App\Models\Product::orderBy('created_at','DESC')->where('status', '=', 'active')->take(5)->get(),
        'categories' => \App\Models\Category::all(),
        'currentCategory' => 'Search Results for "' . request()->name . '"',
        'garageVehicles' => \App\Models\Garage::where('user_id', auth()->id())->get(),
        'setvehicleModel' => '',
        'setvehicleBrand' => '',
        'setvehicleYear' => '',
    ]);
})->name('search');


Route::get('/filter', [\App\Http\Controllers\FilterController::class, 'index']);




//Route::get('/shop/filter', function () {
//
//    $products = \App\Models\Product::where('name', 'like', '%' . request()->name . '%')->where('status', '=', 'active')->get();
//
//    // get the supported vehicles
//    $supportedVehicles = \App\Models\SupportedVehicles::where('brand', request()->brand)->where('model', request()->model)->where('year', request()->year)->get();
//
//
//    $products = $products->filter(function ($product) use ($supportedVehicles) {
//        foreach ($supportedVehicles as $supportedVehicle) {
//            if ($product->id == $supportedVehicle->product_id) {
//                return $product;
//            }
//        }
//    });
//
//    return view('pages.shop', [
//        'products' => $products,
//        'latestProducts' => \App\Models\Product::orderBy('created_at','DESC')->where('status', '=', 'active')->take(5)->get(),
//        'categories' => \App\Models\Category::all(),
//        'currentCategory' => 'Search Results for "' . request()->name . '"',
//        'garageVehicles' => \App\Models\Garage::where('user_id', auth()->id())->get(),
//    ]);
//})->name('filter');



/**
 * Cart Routes
 */

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');



/**
 * User Account Routes
 */

Route::get('/account/dashboard', function () {
    return view('pages.account-dashboard');
})->name('account-dashboard');

Route::get('/account/garage', function () {
    return view('pages.account-garage', [
        'vehicleBrands' => \App\Models\VehicleBrand::all(),
        'vehicleModels' => \App\Models\VehicleModel::all(),
        'vehicleYears' => \App\Models\VehicleYear::all(),
        'garageVehicles' => \App\Models\Garage::where('user_id', auth()->id())->get(),
    ]);
})->name('account-garage');

Route::get('/account/orders', function () {
    return view('pages.account-orders');
})->name('account-orders');

Route::get('/account/order/details', function () {
    return view('pages.account-order-details');
})->name('account-order-details');



/**
 * Checkout Routes
 */

Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout');












//Route::resource(
//    'order',
//    \App\Http\Controllers\OrderController::class
//);

//Route::resource(
//    'cart',
//    \App\Http\Controllers\CartController::class
//);

Route::get('/cart/create', [
    \App\Http\Controllers\CartController::class, 'store'
])->name('cart.create');

Route::get('/cart/edit/{id}/{param2}/{param3}', [
    \App\Http\Controllers\CartController::class, 'update'
])->name('cart.update');

Route::get('/cart/remove/{id}', [
    \App\Http\Controllers\CartController::class, 'remove'
])->name('cart.remove');

Route::get('/cart/{cart}/checkout', [
    \App\Http\Controllers\CartController::class, 'checkout'
])->name('cart.checkout');




Route::post('/order/create', [
    \App\Http\Controllers\OrderController::class, 'store'
])->name('order.store');

