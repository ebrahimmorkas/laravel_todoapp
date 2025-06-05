<?php

use App\Http\Controllers\AuthControllers\AuthController;
use App\Http\Controllers\AuthControllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });
});

Route::get('/register', function() {
    return view('auth.register');
});
Route::get('/dashboard', function() {
    return view('dashboard');
});

// Signin Controllers
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