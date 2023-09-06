<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index(){
        $planets = Planet::all();
        return view('planets.index',compact('planets'));
    }
}
