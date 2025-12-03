<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/login', 'auth.login');
Route::post('/auth/login', [LoginController::class, 'store'])->name('login');

Route::view('/register', 'auth.register');

Route::view('/dashboard', 'dashboard');
