<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class groups extends Controller
{
    //

    //gets 
    function getBookedGroups(Request $req){

        #$group = $req->input('');
        $result = DB::table('')->select('GroupName','PrimaryContact','phone','email','ESS','NumMembers')
        ->where('Booked','booked')->get();

        return view("",[''=>$result]);
    }

    //TODO:
    function editBookedGroups(Request $req){

    }

    //TODO:
    function assignAccomidation(Request $req){
        
    }
}
