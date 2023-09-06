<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlanetRequest;
use App\Http\Requests\UpdatePlanetRequest;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', compact('planets'));
    }

    public function create()
    {
        return view('planets.create');
    }

    public function store(StorePlanetRequest $request)
    {
        $planets = new Planet($request->all());
        $planets->save();
        return redirect('/planets');
    }

    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', compact('planet'));
    }

    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planets.edit', compact('planet'));
    }

    public function update(UpdatePlanetRequest $request,$id)
    {
        $planet = Planet::find($id);
        $planet->fill($request->all());
        $planet->save();
        return redirect('/planets');
    }

    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();
        return redirect('/planets');
    }
}
