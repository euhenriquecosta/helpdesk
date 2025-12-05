<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::view('/', 'home');
});

Route::group(['middleware' => 'auth'], function () {
    Route::view('/dashboard', 'dashboard');

    Route::view('/dashboard/tickets', 'dashboard.tickets')->name('tickets');
    Route::view('/dashboard/technicians', 'dashboard.technicians')->name('technicians');
    Route::view('/dashboard/clients', 'dashboard.clients')->name('clients');
    Route::view('/dashboard/services', 'dashboard.services')->name('services');
});

require __DIR__.'/auth.php';
