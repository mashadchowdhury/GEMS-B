<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//this controller handles the routes and transfer of data for the groups page

//FUNCTION DESCRIPTIONS:

//getRegions gets all regions that have been booked

//editRegions brings the user to the edit regions screen and displays all data in the data base for the region

//updateRegions updates the data entered on the edit

//addRegions adds a regions into the database

class regionsController extends Controller
{
    //TODO: for all change variables as needed for database and frontend connection
    //gets all groups that have been booked
    function getRegions(){
        $result = DB::table('')->select('name','totalAccom','numBookings', 'description')->get();

        return view("",[''=>$result]);
    }
   
    //TODO:
    //brings the user to the edit bookings screen and displays all data in the data base for the given id
    function editRegions($id){
        $data = DB::table('')->find($id);
        return view("",['data'=>$data]);
    }

    //updates the data entered on the edit
    function updateReqions(Request $req){
        DB::table('')->where('id', $req->id)->update([
            'name' => $req->name,
            'numAccomidations' => $req->numAccomidations,
            'numBookings' => $req->numBookings,
            'roomsAvailable' => $req->roomsAvailable
        ]);

        return redirect("");
    }

    //TODO:
    //adds a regions into the database
    function addRegions(Request $reg){
        DB::table('')->insert([
            'name' => $req->name,
            'numAccomidations' => $req->numAccomidations,
            'numBookings' => $req->numBookings,
            'roomsAvailable' => $req->roomsAvailable
        ]);

        return redirect("");
    }
}
