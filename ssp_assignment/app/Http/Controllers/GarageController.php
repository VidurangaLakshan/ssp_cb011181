<?php

namespace App\Http\Controllers;

use App\Models\Garage;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('windmill-admin.garage.index', [
            'garageVehicles' => Garage::where('user_id', auth()->id())->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('windmill-admin.garage.form', [
//            'garage' => new Garage(),
//            'purpose' => 'Create Garage Vehicle'
//        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'year' => 'required',
            'brand' => 'required',
            'model' => 'required',
        ]);

        Garage::create([
            'user_id' => auth()->id(),
            'year' => $request->year,
            'brand' => $request->brand,
            'model' => $request->model,

        ]);

        return redirect('/account/garage');
    }

    /**
     * Display the specified resource.
     */
    public function show(Garage $garage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Garage $garage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Garage $garage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Garage $garage)
    {
        $garage->delete();

        return redirect('/account/garage');
    }
}
