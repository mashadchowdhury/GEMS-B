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
    function editRegions(Request $reg){

    }
    //TODO:
    function addRegions(Request $reg){

    }
}
