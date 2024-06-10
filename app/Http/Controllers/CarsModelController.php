<?php

namespace App\Http\Controllers;

use App\Models\CarsModel;
use Illuminate\Http\Request;

class CarsModelController extends Controller
{
    public function index()
    {
        return response()->json(CarsModel::all());
    }

    public function show($id)
    {
        return response()->json(CarsModel::findOrFail($id));
    }

    public function store(Request $request)
    {
        $carModel = CarsModel::create($request->all());
        return response()->json($carModel, 201);
    }

    public function update(Request $request, $id)
    {
        $carModel = CarsModel::findOrFail($id);
        $carModel->update($request->all());
        return response()->json($carModel, 200);
    }

    public function destroy($id)
    {
        CarsModel::destroy($id);
        return response()->json(null, 204);
    }
}