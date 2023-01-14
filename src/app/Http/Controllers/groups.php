<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//this controller handles the routes and transfer of data for the groups page

//FUNCTION DESCRIPTIONS:

//getBookedGroups gets all groups that have been booked
//editBookedGroups brings the user to the edit bookings screen and displays all data in the data base for the given id
//updateBookedGroups updates the data entered on the edit


class groups extends Controller
{
    //TODO: for all change variables as needed for database and frontend connection

    //gets all groups that have been booked
    function getBookedGroups(Request $req){
        #$group = $req->input('');
        $result = DB::table('')->select('GroupName','PrimaryContact','phone','email','ESS','NumMembers')
        ->where('Booked','booked')->get();

        return view("",[''=>$result]);
    }

    //TODO:

    //brings the user to the edit bookings screen and displays all data in the data base for the given id
    function editBookedGroups($id){
        $data = DB::table('')->find($id);
        return view("",['data'=>$data]);
    }

    //TODO:
    
    //updates the data entered on the edit 
    function updateBookedGroups(Request $req){
        DB::table('')->where('id', $req->id)->update([
            'name' => $req->name,
            'PrimaryContact' => $req->PrimaryContact,
            'phone' => $req->phone,
            'email' => $req->email,
            'SecondaryContact' => $req->SecondaryContact,
            'secEmail' => $req->secEmail,
            'secPhone' => $req->secPhone,
            'ESS' => $req->ESS,
            'NumMemebers' => $req->NumMembers,
            'adults' => $req->adults,
            'children' => $req->children,
            'pets' => $req->pets,
            'accessibility' => $req->accessibility
        ]);

        return redirect("");
    }

    //TODO:
    function assignAccomidation(Request $req){

    }
}
