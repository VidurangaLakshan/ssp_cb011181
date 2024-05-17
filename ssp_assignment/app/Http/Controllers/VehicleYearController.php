<?php

namespace App\Http\Controllers;

use App\Models\VehicleYear;
use Illuminate\Http\Request;

class VehicleYearController extends Controller
{
    public function index()
    {
        return view('windmill-admin.vehicle-year.index', [
            'vehicleYears' => VehicleYear::all(),
        ]);
    }

    public function create()
    {
        return view('windmill-admin.vehicle-year.form', [
            'vehicleYear' => new VehicleYear(),
            'purpose' => 'Create Vehicle Year',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required',
        ]);

        $vehicleYear = new VehicleYear();
        $vehicleYear->year = $request->year;
        $vehicleYear->save();

        return redirect()->route('vehicle-year.index')->with('success', 'Vehicle Year Created Successfully!');
    }

//    public function show($id)
//    {
//        $vehicleYear = VehicleYear::find($id);
//
//        return view('vehicleYear.show', compact('vehicleYear'));
//    }

//    public function edit(VehicleYear $vehicleYear)
//    {
//        return view('windmill-admin.vehicle-year.form', [
//            'purpose' => 'Edit Vehicle Year',
//            'vehicleYear' => $vehicleYear,
//        ]);
//    }

//    public function update(Request $request, VehicleYear $vehicleYear)
//    {
//        $request->validate([
//            'year' => 'required',
//        ]);
//
//        $vehicleYear->year = $request->year;
//        $vehicleYear->save();
//
//        return redirect()->route('admin.vehicle-year.index');
//    }

    public function destroy(VehicleYear $vehicleYear)
    {
        $vehicleYear->delete();

        return redirect()->route('vehicle-year.index')->with('success', 'Vehicle Year Deleted Successfully!');
    }
}
