<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airport;
use App\Flight;

class AirportController extends Controller
{

    public function homepage()
    {
        return View('welcome')
        ->with('airports', Airport::all())
        ->with('flights', Flight::orderBy('price', 'ASC')->get());
    }
}
