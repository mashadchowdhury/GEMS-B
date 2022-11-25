<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class groups extends Controller
{
    //

    function getGroup(Request $req){

        $group = $req->input('');
        $result = DB::table('')->where('group',$group)->get();

        return view("",[''=>$result]);
    }
}
