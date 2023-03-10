<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booking.index', [
            'booking' => Booking::with('user')->latest()->get(),
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
            'accommodation' => 'required|string',
            'group' => 'required|string',
            'from_date' => 'required|date',
            'to_date' => 'required|date',
        ]);
        $request->user()->bookings()->create($validated);
        return redirect(route('booking.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
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
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $this->authorize('update', $booking);
        $validated = $request->validate([
            'message' => 'required|string|max:255',
            'accommodation' => 'required|string',
            'group' => 'required|string',
            'from_date' => 'required|dateTime',
            'to_date' => 'required|dateTime',
        ]);
        $booking->update($validated);
        return redirect(route('booking.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $this->authorize('delete', $booking);
        $booking->delete();
        return redirect(route('booking.index'));
    }
}
