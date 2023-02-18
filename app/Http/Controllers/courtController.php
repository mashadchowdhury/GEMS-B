<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showMap()
{
    return view('courts.showmap');
}
}
