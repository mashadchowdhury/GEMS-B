<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class regionsController extends Controller
{
    //TODO: for all change variables as needed for database and frontend connection

    function getRegions(){
        $result = DB::table('')->select('name','totalAccom','numBookings', 'description')->get();

        return view("",[''=>$result]);
    }
   
    //TODO:
    function editRegions($id){
        $data = DB::table('')->find($id);
        return view("",['data'=>$data]);
    }

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
