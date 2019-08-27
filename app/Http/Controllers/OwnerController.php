<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
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
        return view('owner.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $owner = Owner::create([
            'name' => $request->name,
            // 'photo' => $photo,
            'lga' => $request->lga,
            'state' => $request->state,
            'address' => $request->address,
            'dob' => $request->dob,
            'gender' => $request->gender
        ]);
        if ($path = $request->file('photo')) {
            $photo =  $path->store('owners/' . $owner->id);
            $owner->photo = $photo;
            $owner->save();
        }
        return redirect('owner/' . $owner->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        return view('owner.single')->withOwner($owner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        return view('owner.form')->withOwner($owner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        $owner->update([
            'name' => $request->name,
            // 'photo' => $photo,
            'lga' => $request->lga,
            'state' => $request->state,
            'address' => $request->address,
            'dob' => $request->dob,
            'gender' => $request->gender
        ]);
        if ($path = $request->file('photo')) {
            $owner->photo =  $path->store('owners/' . $owner->id);
            $owner->save();
        }
        return redirect('owner/' . $owner->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        return $owner->delete();
    }
}
