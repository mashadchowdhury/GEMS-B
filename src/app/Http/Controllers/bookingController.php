<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bookingController extends Controller
{
    //
    //gets all bookings currently in the database and passes them to a view to display them
    function getBookings(){
        $result = DB::table('')->select('bookingID','groupName','accomidation','fromDate','toDate')->get();

        return view("",[''=>$result]);
    }

    //brings user to edit booking screen for that specific id
    function editBooking($id){
        $data = DB::table('')->find($id);
        return view("",['data'=>$data]);
    }

    //update a booking with the data passed to the function
    function updateBooking(Request $req){
        DB::table('')->where('bookingID', $req->bookingID)->update([
            'groupName' => $req->groupNameame,
            'accomidations' => $req->accomidations,
            'fromDate' => $req->fromDate,
            'toDate' => $req->toDate
        ]);

        return redirect("");
    }

    //TODO: figure out id creation system
    //create a booking
    function createBooking(Request $req){
        DB::table('')->insert([
            'bookingID' => rand(1,1000), //need to find better way to do this
            'groupName' => $req->groupNameame,
            'accomidations' => $req->accomidations,
            'fromDate' => $req->fromDate,
            'toDate' => $req->toDate
        ]);

        return redirect("");
    }
}
