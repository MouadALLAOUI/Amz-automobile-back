<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Task;
use App\Models\Task_sheet;
use App\Models\User;
use App\Models\Vehicule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function show($id)
    {
        return response()->json(Task::findOrFail($id));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = Task::create($request->all());
        return response()->json($task, 201);
    }
    public function full_store(Request $request)
    {
        $messages = [
            "required" => "le champ :attribute est obligatoire.",
            "date" => "le champ :attribute doit être une date valide.",
            "string" => "le champ :attribute doit être une chaine de caractères.",
            "in" => "la valeur du champ :attribute n'st pas valide.",
            "integer" => "le champ :attribute doit être un nombre entier.",
            "email" => "l'email choisi n'est pas valide.",
            "unique" => "l'email choisi est déjà pris",
            "min" => [
                "numeric" => "le champ :attribute doit être au moins égale à :min."
            ]
        ];
        $attributes = [
            "vehicule",
            "immatriculation",
            "kilometrage",
            "model",
            "title",
            "description",
            "assigned_to",
            "created_by",
            "nom",
            "email",
            "telephone",
            "vehicule_id",
            "task_id",
        ];
        $validator = Validator::make($request->all(), [
            "vehicule" => ["required"],
            "immatriculation" => ["required", "string"],
            "kilometrage" => ["required", "integer"],
            "model" => ["required"],
            "title" => ["required", "string"],
            "description" => ["string"],
            "assigned_to" => ["required", "integer"],
            "created_by" => ["required", "integer"],
            "nom" => ["required", "string"],
            "email" => ["required", "string", "email", "unique:clients,email"],
            "telephone" => ["required", "string"]
        ], $messages, $attributes);

        if ($validator->fails()) {
            return response()->json(["status" => "error", "error" => $validator->errors()]);
        }

        try {
            DB::transaction(function () use ($request) {
                $vehicule = new Vehicule();
                $vehicule->vehicule = $request->vehicule;
                $vehicule->immatriculation = $request->immatriculation;
                $vehicule->kilometrage = $request->kilometrage;
                $vehicule->model = $request->model;
                $vehicule->save();

                $task = new Task();
                $task->title = $request->title;
                $task->description = $request->description;
                $task->status = 'pending';
                $task->assigned_to = $request->assigned_to;
                $task->created_by = $request->created_by;
                $task->save();

                $client = new Client();
                $client->nom = $request->nom;
                $client->email = $request->email;
                $client->telephone = $request->telephone;
                $client->vehicule_id = $vehicule->id;
                $client->task_id = $task->id;
                $client->save();

                $task_sheets = new Task_sheet();
                $task_sheets->num_matricule = $request->immatriculation;
                $task_sheets->entree = Carbon::now();
                $task_sheets->vehicule_id = $vehicule->id;
                $task_sheets->task_id = $task->id;
                $task_sheets->client_id = $client->id;
                $task_sheets->save();
            });

            return response()->json(["status" => "success", "message" => "la tache a été bien ajouté", "taches" => Task::all()]);
        } catch (\Exception $e) {
            return response()->json(["status" => "error", "error" => $e]);
        }
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return response()->json($task, 200);
    }

    public function destroy($id)
    {
        Task::destroy($id);
        return response()->json(null, 204);
    }
}