<?php

namespace App\Http\Controllers;

use App\Models\VehicleModel;
use Illuminate\Http\Request;

class VehicleModelController extends Controller
{
    public function index()
    {
        return view('windmill-admin.vehicle-model.index', [
            'vehicleModels' => VehicleModel::all(),
        ]);
    }

    public function create()
    {
        return view('windmill-admin.vehicle-model.form', [
            'vehicleModel' => new VehicleModel(),
            'purpose' => 'Create Vehicle Model',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
        ]);

        $vehicleModel = new VehicleModel();
        $vehicleModel->model = $request->model;
        $vehicleModel->save();

        return redirect()->route('vehicle-model.index')->with('success', 'Vehicle Model Created Successfully!');
    }

    public function destroy(VehicleModel $vehicleModel)
    {
        $vehicleModel->delete();

        return redirect()->route('vehicle-model.index')->with('success', 'Vehicle Model Deleted Successfully!');
    }
}
