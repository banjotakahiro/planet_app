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

    public function create(){
        return view('planets.create');
    }
    
    public function store(Request $request){
        $planet = new Planet($request->all());
        $planet->save();
        return redirect('planets.index');
    }

}
