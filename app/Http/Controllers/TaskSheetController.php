<?php

namespace App\Http\Controllers;

use App\Models\Task_sheet;
use Illuminate\Http\Request;

class TaskSheetController extends Controller
{
    public function index()
    {
        return response()->json(Task_sheet::all());
    }

    public function show($id)
    {
        return response()->json(Task_sheet::findOrFail($id));
    }

    public function store(Request $request)
    {
        $taskSheet = Task_sheet::create($request->all());
        return response()->json($taskSheet, 201);
    }

    public function update(Request $request, $id)
    {
        $taskSheet = Task_sheet::findOrFail($id);
        $taskSheet->update($request->all());
        return response()->json($taskSheet, 200);
    }

    public function destroy($id)
    {
        Task_sheet::destroy($id);
        return response()->json(null, 204);
    }
}