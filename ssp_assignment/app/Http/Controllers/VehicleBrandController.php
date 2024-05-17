<?php

namespace App\Http\Controllers;

use App\Models\VehicleBrand;
use App\Models\VehicleYear;
use Illuminate\Http\Request;

class VehicleBrandController extends Controller
{
    public function index()
    {
        return view('windmill-admin.vehicle-brand.index', [
            'vehicleBrands' => VehicleBrand::all(),
        ]);
    }

    public function create()
    {
        return view('windmill-admin.vehicle-brand.form', [
            'vehicleBrand' => new VehicleBrand(),
            'purpose' => 'Create Vehicle Brand',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
        ]);

        $vehicleBrand = new VehicleBrand();
        $vehicleBrand->brand = $request->brand;
        $vehicleBrand->save();

        return redirect()->route('vehicle-brand.index')->with('success', 'Vehicle Brand Created Successfully!');
    }

    public function destroy(VehicleBrand $vehicleBrand)
    {
        $vehicleBrand->delete();

        return redirect()->route('vehicle-brand.index')->with('success', 'Vehicle Brand Deleted Successfully!');
    }
}
