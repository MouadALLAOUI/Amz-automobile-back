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
}
