<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::view('/', 'home');
});

Route::group(['middleware' => 'auth'], function () {
    Route::view('/dashboard', 'dashboard');
});

require __DIR__.'/auth.php';
