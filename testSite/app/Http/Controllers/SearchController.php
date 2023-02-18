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
        //$result = Accommidation::select('name_accommodation as value')->where('name_accommidation','like','%'.$search.'%')->get();
        //$result = Group::select('name_group')->where('name_group','like','%'.$search.'%')->get();
        

        //need to figure out how to merge the results together

        //this may work, dont remember
        //$result = array_merge($res,$res3); 
        
        return response()->json($result); 


    }

    public function searchDB(Request $request){
        
        $search = $request->input('automplete-1');
        //$search = $request->term;

        //possible to get more than one row this way need to deal with that
        //possible solution, add code to detect this here and route to a different page
        //will also need to figure out a way to handle which table to search and return the correct view

        //$result = Region::where('name_region','like','%'.$search.'%')->first();
        
        //$result = Region::where('name_region',$search)->first();
        $result = Region::find(2);

        return view('search.index', ['searchResult' => $result]);
    }
}
