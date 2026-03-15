<?php

use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::redirect('/', '/auth/login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::patch('/settings/profile', [SettingsController::class, 'updateProfile'])->name('settings.profile.update');
    Route::patch('/settings/password', [SettingsController::class, 'updatePassword'])->name('settings.password.update');
    Route::delete('/settings/account', [SettingsController::class, 'destroy'])->name('settings.account.destroy');

    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::patch('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

require __DIR__.'/auth.php';
