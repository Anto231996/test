<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use App\Airport;

class FlightController extends Controller
{
    public function index(){
        $flights = Flight::orderBy('price', 'ASC')->get();
        return view('welcome', compact('flights'));
    }
}
