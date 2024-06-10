<?php

namespace App\Http\Controllers;

use App\Models\Auto_part;
use Illuminate\Http\Request;

class AutoPartController extends Controller
{
    public function index()
    {
        return response()->json(Auto_part::all());
    }

    public function show($id)
    {
        return response()->json(Auto_part::findOrFail($id));
    }

    public function store(Request $request)
    {
        $autoPart = Auto_part::create($request->all());
        return response()->json($autoPart, 201);
    }

    public function update(Request $request, $id)
    {
        $autoPart = Auto_part::findOrFail($id);
        $autoPart->update($request->all());
        return response()->json($autoPart, 200);
    }

    public function destroy($id)
    {
        Auto_part::destroy($id);
        return response()->json(null, 204);
    }
}