<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\TaskController;
=======
>>>>>>> 81769701ce423ebdbd2a61e9092da94b46abdb49

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

Route::get('/tasks', [TaskController::class, 'index']);
=======
>>>>>>> 81769701ce423ebdbd2a61e9092da94b46abdb49
