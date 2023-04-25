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
        //OUTPUT IS COLLECTIONS INSTANCE

        //accommidations gives error 500
        $result2 = Accommodation::select('name_accommodation as value')->where('name_accommodation','like','%'.$search.'%')->get();
        $result3 = Group::select('name_group as value')->where('name_group','like','%'.$search.'%')->get();
        
        //adding in accommidations should be as simple as concating onto the end of merged
        $merged = $result->concat($result2)->concat($result3);
        
        return response()->json($merged);


    }

    /**
     * return related entries to view from search input
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchDB(Request $request){
        
        $search = $request->input('automplete-1');

        $result = Region::where('name_region','like','%'.$search.'%')->get();
        $result2 = Accommodation::where('name_accommodation','like','%'.$search.'%')->get();
        $result3 = Group::where('name_group','like','%'.$search.'%')->get();
        
        return view('search.index', ['region' => $result, 'group' => $result3, 'accommodation' => $result2]);
    }
}
