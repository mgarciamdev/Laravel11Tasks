<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NuevoDashboard extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        $tasks = $user->tasks;
        return view('CrudDashboard', compact('tasks'));
    }
}
