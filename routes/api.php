<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AutoPartController;
use App\Http\Controllers\CarsMakesController;
use App\Http\Controllers\CarsModelController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskSheetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\vehiculeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/full_store", [TaskController::class, "full_store"]);
Route::get("/get_client_task_vehicule", [ClientController::class, "index_C_T_VMM"]);

Route::post('/login', [AuthController::class, 'login']);

Route::apiResources([
    'users' => UserController::class,
    'roles' => RoleController::class,
    'clients' => ClientController::class,
    'vehicules' => vehiculeController::class,
    'tasks' => TaskController::class,
    'task-sheets' => TaskSheetController::class,
    'operations' => OperationController::class,
    'auto-parts' => AutoPartController::class,
    'employers' => EmployerController::class,
    'car-makes' => CarsMakesController::class,
    'car-models' => CarsModelController::class,
]);