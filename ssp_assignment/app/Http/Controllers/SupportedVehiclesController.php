<?php

namespace App\Http\Controllers;

use App\Models\SupportedVehicles;
use Illuminate\Http\Request;

class SupportedVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('windmill-admin.supported-vehicles.index', [
            'supportedVehicles' => SupportedVehicles::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('windmill-admin.supported-vehicles.form', [
            'supportedVehicle' => new SupportedVehicles(),
            'purpose' => 'Create Supported Vehicles',
            'products' => \App\Models\Product::all(),
            'vehicleYears' => \App\Models\VehicleYear::all(),
            'vehicleBrands' => \App\Models\VehicleBrand::all(),
            'vehicleModels' => \App\Models\VehicleModel::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'year' => 'required',
            'brand' => 'required',
            'model' => 'required',
        ]);

        SupportedVehicles::create([
            'product_id' => $request->product_id,
            'year' => $request->year,
            'brand' => $request->brand,
            'model' => $request->model,
        ]);

        return redirect('/admin/supported-vehicles');
    }

    /**
     * Display the specified resource.
     */
    public function show(SupportedVehicles $supportedVehicles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SupportedVehicles $supportedVehicles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SupportedVehicles $supportedVehicles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SupportedVehicles $supportedVehicles)
    {
        $supportedVehicles->delete();

        return redirect('/admin/supported-vehicles');
    }
}
