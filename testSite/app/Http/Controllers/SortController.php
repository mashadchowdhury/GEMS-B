<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SortController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */

    public function sort(Model $model,$column)
    {
        // Get the class name of the model
        $className = get_class($model);
        
        // Sort the data by the given column
        $data = $className::orderBy($column)->get();
        
        // Return a view with the sorted data
        return view($model.index, compact('data'));
    }
}
?>