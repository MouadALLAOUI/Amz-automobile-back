<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        return response()->json(Employer::all());
    }

    public function show($id)
    {
        return response()->json(Employer::findOrFail($id));
    }

    public function store(Request $request)
    {
        $employer = Employer::create($request->all());
        return response()->json($employer, 201);
    }

    public function update(Request $request, $id)
    {
        $employer = Employer::findOrFail($id);
        $employer->update($request->all());
        return response()->json($employer, 200);
    }

    public function destroy($id)
    {
        Employer::destroy($id);
        return response()->json(null, 204);
    }
}