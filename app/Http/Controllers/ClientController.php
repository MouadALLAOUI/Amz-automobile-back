<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Task;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        foreach ($clients as $client) {
            // add to json another attribute userRole
            $cars = Vehicule::where('id', '=', $client->vehicule_id)->get();
            foreach ($cars as $car) {
                $car->setAttribute("cars_make", $car->carsMake);
                $car->setAttribute("cars_model", $car->carsModel);
            }
            $tasks = Task::where('id', '=', $client->task_id)->get();
            foreach ($tasks as $task) {
                $task->setAttribute("assigned_to", $task->assignedTo);
                $task->setAttribute("created_by", $task->createdBy);
            }
            $client->setAttribute("task", $tasks);
            $client->setAttribute("vehicule", $cars);
            $client->setHidden(['created_at', 'updated_at', 'vehicule_id', 'task_id']);
        }
        return response()->json($clients);
    }
}
