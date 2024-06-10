<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class vehiculeController extends Controller
{
    public function index()
    {
        return response()->json(Vehicule::all());
    }

    public function show($id)
    {
        return response()->json(Vehicule::findOrFail($id));
    }

    public function store(Request $request)
    {
        $vehicule = Vehicule::create($request->all());
        return response()->json($vehicule, 201);
    }

    public function update(Request $request, $id)
    {
        $vehicule = Vehicule::findOrFail($id);
        $vehicule->update($request->all());
        return response()->json($vehicule, 200);
    }

    public function destroy($id)
    {
        Vehicule::destroy($id);
        return response()->json(null, 204);
    }
}