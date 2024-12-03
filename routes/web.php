<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/', [UserController::class, 'login']);


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
