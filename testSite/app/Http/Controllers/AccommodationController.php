<?php

namespace App\Http\Controllers;

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
        return view('accommodation.index', [
            'accomodation' => Accomodation::with('user')->latest()->get(),
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
            'message' => 'required|string|max:255',
        ]);
        $request->user()->bookings()->create($validated);
        return redirect(route('booking.index'));
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
        $this->authorize('update', $booking);
        return view('booking.edit', [
            'booking' => $booking,
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
        $this->authorize('update', $booking);
        $validated = $request->validate([
            'name_accommodation' => 'required|string',
            'address' => 'required|string|max:128',
            'email_accommodation' => 'required|string|max:96',
            'room_type' => 'required|string',
            'number_of_rooms' => 'integer',
            'number_of_beds' => 'integer',
            'ESS_support' => 'required|boolean',
            'restaurant_available' => 'required|boolean',
            'pets_allowed' => 'required|boolean',
        ]);
        $booking->update($validated);
        return redirect(route('booking.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accommodation  $accommodation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accommodation $accommodation)
    {
        //
    }
}
