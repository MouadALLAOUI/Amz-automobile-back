<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where("status", "!=", "DEV")->get();
        foreach ($users as $user) {
            // add to json another attribute userRole
            $user->setAttribute("userRole", $user->getRole());
        }
        return response()->json($users);
    }
}
