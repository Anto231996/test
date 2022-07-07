<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airport;
use App\Flight;

class AirportController extends Controller
{
    public function index(){
        $airports = Airport::all();
        return view('welcome', compact('airports'));
    }
}
