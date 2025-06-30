<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all(); // ia toate task-urile din DB
        return view('tasks.index', compact('tasks')); // trimite-le către view-ul Blade
    }
}
