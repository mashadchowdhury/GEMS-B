<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Group;
use App\Models\Accommodation;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    /**
     * Selects rows in the database that are like the term in the request and returns a response
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getAutoComplete(Request $request){

        $search = $request->term;

        $result = Region::select('name_region as value')->where('name_region','like','%'.$search.'%')->get();

        //looks like data isnt getting saved to the data base for both groups and accomidations

        //need to figure out what the output from this is
        //$res2 = Accommidation::select('name_accommodation as value')->where('name_accommidation','like','%'.$search.'%')->get();
        //$res3 = Group::select('name_group as value')->where('name_group','like','%'.$search.'%')->get();
        

        //need to figure out how to merge the results together

        //this may work, dont remember
        //$result = array_merge($res,$res3); 
        
        return response()->json($result); 


    }
}
