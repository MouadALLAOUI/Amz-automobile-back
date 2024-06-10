<?php

namespace App\Http\Controllers;

use App\Models\CarsMake;
use Illuminate\Http\Request;

class CarsMakesController extends Controller
{
    public function index()
    {
        $car_makes = CarsMake::all();
        foreach ($car_makes as $car) {
            // add to json another attribute userRole
            $car->setAttribute("models", $car->models);
        }
        return response()->json($car_makes);
    }
    public function show($id)
    {
        return response()->json(CarsMake::findOrFail($id));
    }

    public function store(Request $request)
    {
        $carMake = CarsMake::create($request->all());
        return response()->json($carMake, 201);
    }

    public function update(Request $request, $id)
    {
        $carMake = CarsMake::findOrFail($id);
        $carMake->update($request->all());
        return response()->json($carMake, 200);
    }

    public function destroy($id)
    {
        CarsMake::destroy($id);
        return response()->json(null, 204);
    }
}