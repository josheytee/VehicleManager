<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    private $file_directory;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owners = Owner::all();
        return view('vehicle.form', compact('owners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicle = Vehicle::create([
            'owner_id' => $request->owner_id,
            'name' => $request->name,
            'model' => $request->model,
            'color' => $request->color,
            'plate' => $request->plate,
            'expires_on' => $request->expires_on,
            'registered_on' => $request->registered_on
            // 'driving', 'image'
        ]);
        if ($path = $request->file('driving')) {
            $vehicle->driving = $path->store('owners/' . $vehicle->owner->id . '/' . $vehicle->id);
        }
        if ($path2 = $request->file('image')) {
            $vehicle->image =  $path2->store('owners/' . $vehicle->owner->id . '/' . $vehicle->id);
        }
        if ($path || $path2) {
            $vehicle->save();
        }
        return redirect('vehicle/' . $vehicle->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return view('vehicle.single', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        $owners = Owner::all();
        return view('vehicle.form', compact('owners', 'vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        // dd($request); 
        $vehicle->update([
            'owner_id' => $request->owner_id,
            'name' => $request->name,
            'model' => $request->model,
            'color' => $request->color,
            'plate' => $request->plate,
            'expires_on' => $request->expires_on,
            'registered_on' => $request->registered_on
            // 'driving', 'image'
        ]);
        if ($path = $request->file('driving')) {
            $vehicle->driving = $path->store('owners/' . $vehicle->owner->id . '/' . $vehicle->id);
        }
        if ($path2 = $request->file('image')) {
            $vehicle->image =  $path2->store('owners/' . $vehicle->owner->id . '/' . $vehicle->id);
        }
        if ($path || $path2) {
            $vehicle->save();
        }
        return redirect('vehicle/' . $vehicle->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect('/home');
    }
}
