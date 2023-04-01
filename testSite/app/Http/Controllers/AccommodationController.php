<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Accommodation;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region_name = Region::select("name_region")->get();
        return view('accommodation.index', [
            'accommodation' => Accommodation::with('user')->latest()->get(),
            'regions' => $region_name
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
            'name_accommodation' => 'required|string',
            'address' => 'required|string|max:128',
            'email_accommodation' => 'required|string|max:96',
            'room_type' => 'required|string',
            'number_of_rooms' => 'integer',
            'number_of_beds' => 'integer',
            'ESS_support' => 'boolean',
            'restaurant_available' => 'boolean',
            'pets_allowed' => 'boolean',
            'accessibility_available' => 'boolean',
            'accessibility_wheelchair' => 'boolean',
            'accessibility_walker' => 'boolean',
            'name_region' => 'required|string',
        ]);

        //update available rooms in regions table on accommodation creation
        $region_rooms = Region::select('available_rooms')->where('name_region', '=', $validated['name_region'])->get(); 
        $region_accomm = Region::select('amount_accommodations')->where('name_region', '=', $validated['name_region'])->get(); 
        $region_rooms = $region_rooms->value('available_rooms');
        $region_accomm = $region_accomm->value('amount_accommodations');      
        Region::where('name_region', '=', $validated['name_region'])->update(['available_rooms' => $region_rooms + $validated['number_of_rooms'],'amount_accommodations' => $region_accomm + 1]);

        $request->user()->accommodations()->create($validated);
        return redirect(route('accommodation.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accommodation  $accommodation
     * @return \Illuminate\Http\Response
     */
    public function show(Accommodation $accommodation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accommodation  $accommodation
     * @return \Illuminate\Http\Response
     */
    public function edit(Accommodation $accommodation)
    {
        $region_name = Region::select("name_region")->get();
        $this->authorize('update', $accommodation);
        return view('accommodation.edit', [
            'accommodation' => $accommodation,
            'regions' => $region_name
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accommodation  $accommodation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accommodation $accommodation)
    {
        $this->authorize('update', $accommodation);
        $validated = $request->all();
        /* $validated = $request->validate([
            'name_accommodation' => 'required|string',
            'address' => 'required|string|max:128',
            'email_accommodation' => 'required|string|max:96',
            'room_type' => 'required|string',
            'number_of_rooms' => 'integer',
            'number_of_beds' => 'integer',
            'ESS_support' => 'required|boolean',
            'restaurant_available' => 'required|boolean',
            'pets_allowed' => 'required|boolean',
            'accessibility_available' => 'required|boolean',
            'accessibility_wheelchair' => 'required|boolean',
            'accessibility_walker' => 'required|boolean',
            'name_region' => 'required|string',
        ]); */
        $region_rooms = Region::select('available_rooms')->where('name_region', '=', $accommodation->name_region)->get(); 
        $region_rooms = $region_rooms->value('available_rooms');
        $curr_accomm_rooms = Accommodation::select('number_of_rooms')->where('name_accommodation', '=', $accommodation->name_accommodation)->get();
        $curr_accomm_rooms = $curr_accomm_rooms->value('number_of_rooms');

        $room_num_difference = $curr_accomm_rooms - $validated['number_of_rooms'];
        Region::where('name_region', '=', $accommodation->name_region)->update(['available_rooms'=> $region_rooms - $room_num_difference]);

        $accommodation->update($validated);
        return redirect(route('accommodation.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accommodation  $accommodation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accommodation $accommodation)
    {
        //update available rooms in regions table on accommodation deletion
        $region_rooms = Region::select('available_rooms')->where('name_region', '=', $accommodation->name_region)->get(); 
        $region_accomm = Region::select('amount_accommodations')->where('name_region', '=', $accommodation->name_region)->get(); 
        $region_rooms = $region_rooms->value('available_rooms'); 
        $region_accomm = $region_accomm->value('amount_accommodations');      
        Region::where('name_region', '=', $accommodation->name_region)->update(['available_rooms' => $region_rooms - $accommodation->number_of_rooms,'amount_accommodations' => $region_accomm - 1]);


        $this->authorize('delete', $accommodation);
        $accommodation->delete();
        return redirect(route('accommodation.index'));
    }
}
