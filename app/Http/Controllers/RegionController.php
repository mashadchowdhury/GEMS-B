<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('region.index', [
            'region' => Region::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_region' => 'required|string',
            'amount_accommodations' => 'required|integer',
            'amount_bookings' => 'required|integer',
            'available_rooms' => 'required|integer',
        ]);
        $request->user()->regions()->create($validated);
        return redirect(route('region.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        $this->authorize('update', $region);
        return view('region.edit', [
            'region' => $region,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
        $this->authorize('update', $region);
        $validated = $request->validate([
            'name_region' => 'required|string',
            'amount_accommodations' => 'required|integer',
            'amount_bookings' => 'required|integer',
            'available_rooms' => 'required|integer',
        ]);
        $region->update($validated);
        return redirect(route('region.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        $this->authorize('delete', $region);
        $region->delete();
        return redirect(route('region.index'));
    }
}
