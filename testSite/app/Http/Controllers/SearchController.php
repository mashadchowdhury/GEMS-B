<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function getAutoComplete(Request $request){

        //
        $search = $request->term;

        $result = Region::select('name_region as value')->where('name_region','like','%'.$search.'%')->get();
        
        //might need to translate into array or json
        return response()->json($result); 


    }
}
