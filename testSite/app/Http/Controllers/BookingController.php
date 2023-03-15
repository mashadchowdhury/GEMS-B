<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Group;
use App\Models\Accommodation;
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
        $validated = $request->all();
        /* $validated = $request->validate([
            'accommodation' => 'required|string',
            'group' => 'required|string',
            'from_date' => 'required|dateTime',
            'to_date' => 'required|dateTime',
        ]); */
        $accom_num = Accommodation::select('number_of_beds','name_region')->where('name_accommodation', '=', $validated['name_accommodation'])->get();
        $group_size = Group::select('group_count')->where('name_group', '=', $validated['name_group'])->get();
        $region_name = $accom_num->value('name_region');
        $accom_num = $accom_num->value('number_of_beds');
        $group_size = $group_size->value('group_count');
        
        $num_bookings = Region::select('amount_bookings','amount_accommodations')->where('name_region', '=', $region_name)->get();
        $region_accomm = $num_bookings->value("amount_accommodations");
        $num_bookings = $num_bookings->value('amount_bookings');

        if($accom_num == $group_size){
            Region::where('name_region', '=', $region_name)->update(["amount_accommodations" => $region_accomm - 1]);
        }

        /*could implement script or something in booking view to take data passed along with this return to run the alert from
        from with in the view file*/ 
        if($accom_num < $group_size){
            $msg = "Group size too large for this accommodation";
            echo "<script type='text/javascript'>alert('$msg');</script>";
            return redirect(route('booking.index'));
        }
        
        Region::where('name_region', '=', $region_name)->update(["amount_bookings" => $num_bookings + 1]);
        Accommodation::where('name_accommodation', '=', $validated['name_accommodation'])->update(['number_of_beds' => $accom_num - $group_size]);
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
        $validated = $request->all();
        /* $validated = $request->validate([
            'accommodation' => 'required|string',
            'group' => 'required|string',
            'from_date' => 'required|dateTime',
            'to_date' => 'required|dateTime',
        ]); */
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
        $accom_num = Accommodation::select('number_of_beds','name_region')->where('name_accommodation', '=', $booking->name_accommodation)->get();
        $group_size = Group::select('group_count')->where('name_group', '=', $booking->name_group)->get();
        $region_name = $accom_num->value('name_region');
        $accom_num = $accom_num->value('number_of_beds');
        $group_size = $group_size->value('group_count');

        $num_bookings = Region::select('amount_bookings','amount_accommodations')->where('name_region', '=', $region_name)->get();
        $region_accomm = $num_bookings->value("amount_accommodations");
        $num_bookings = $num_bookings->value('amount_bookings');

        if($accom_num == 0){
            Region::where('name_region', '=', $region_name)->update(["amount_accommodations" => $region_accomm + 1]);
        }
        
        Region::where('name_region', '=', $region_name)->update(["amount_bookings" => $num_bookings - 1]);
        Accommodation::where('name_accommodation', '=', $booking->name_accommodation)->update(['number_of_beds' => $accom_num + $group_size]);
        $this->authorize('delete', $booking);
        $booking->delete();
        return redirect(route('booking.index'));
    }
}
