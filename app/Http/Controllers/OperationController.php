<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function index()
    {
        return response()->json(Operation::all());
    }

    public function show($id)
    {
        return response()->json(Operation::findOrFail($id));
    }

    public function store(Request $request)
    {
        $operation = Operation::create($request->all());
        return response()->json($operation, 201);
    }

    public function update(Request $request, $id)
    {
        $operation = Operation::findOrFail($id);
        $operation->update($request->all());
        return response()->json($operation, 200);
    }

    public function destroy($id)
    {
        Operation::destroy($id);
        return response()->json(null, 204);
    }
}