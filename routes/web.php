<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\TaskController;
=======
>>>>>>> 81769701ce423ebdbd2a61e9092da94b46abdb49

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
<<<<<<< HEAD

Route::get('/tasks', [TaskController::class, 'index']);
=======
>>>>>>> 81769701ce423ebdbd2a61e9092da94b46abdb49
=======

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/testroute', function () {
    return 'Test route works!';
});
>>>>>>> 42956b651617e0d39d431bbe3a766d6d833c76e4
