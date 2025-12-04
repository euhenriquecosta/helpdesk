<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/auth/login', [LoginController::class, 'index']);
    Route::post('/auth/login', [LoginController::class, 'store'])->name('login');
    Route::get('/auth/register', [RegisterController::class, 'index']);
    Route::post('/auth/register', [RegisterController::class, 'store'])->name('register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('/auth/logout', [LoginController::class, 'destroy'])->name('logout');
});
