<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('dashboard' , [DashboardController::Class , 'index'])->middleware('auth')->name('dashboard');
Route::get('/profile' , [ProfileController::class , 'index']);
Route::get('search' , [ProfileController::class , 'search']);
Route::get('find' , [ProfileController::class , 'find']);

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('show/{nom}' , [ProfileController::Class , 'show']);

require __DIR__.'/auth.php';

