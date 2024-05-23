<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index()
    {
        $link = url()->full();
        // get the parts after ?vehicle_parts=
        $link = explode('?filter_vehicle=', $link)[1];
        // get the query string

        if ($link == 'all') {
            return redirect()->route('shop');
        } else {
            // split the words by _
            $link = explode('_', $link);

            $vehicleYear = $link[0];
            $vehicleBrand = $link[1];
            $vehicleModel = $link[2];

            $supportedVehicles = \App\Models\SupportedVehicles::where('year', $vehicleYear)
                ->where('brand', $vehicleBrand)
                ->where('model', $vehicleModel)
                ->get();

            // get the products of the supported vehicles through the product id in the supported vehicles table, then feed those products into the view
            $products = $supportedVehicles->map(function ($supportedVehicle) {
                return $supportedVehicle->product;
            });

            return view('pages.shop', [
                'products' => $products,
                'latestProducts' => \App\Models\Product::orderBy('created_at', 'DESC')->where('status', '=', 'active')->take(5)->get(),
                'categories' => \App\Models\Category::all(),
                'currentCategory' => 'Search Results for "' . $vehicleBrand . ' ' . $vehicleModel . ' ' . $vehicleYear . '"',
                'garageVehicles' => \App\Models\Garage::where('user_id', auth()->id())->get(),
                'setvehicleYear' => $vehicleYear,
                'setvehicleBrand' => $vehicleBrand,
                'setvehicleModel' => $vehicleModel,
            ]);

        }

    }
}
