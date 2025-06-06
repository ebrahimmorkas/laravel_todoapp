<?php

use App\Http\Controllers\AuthControllers\AuthController;
use App\Http\Controllers\AuthControllers\LoginController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Defning middleware
Route::middleware('auth')->group(function () {
    Route::get('/create', [TodoController::class, 'create']);
    Route::post('/store', [TodoController::class,'store']);
    Route::delete('/destroy/{id}',[TodoController::class, 'destroy']);
    Route::get('/edit/{id}', [TodoController::class,'edit']);
    Route::patch('/update/{id}', [TodoController::class, 'update']);
    Route::get('/show/{id}', [TodoController::class, 'show']);
});

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [TodoController::class,'index']);

// Register Controllers
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// Login Controllers
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Logout route
Route::post('/logout', function() {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
});