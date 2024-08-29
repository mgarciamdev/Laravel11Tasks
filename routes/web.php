<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NuevoDashboard;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

Route::redirect('/', '/dashboard');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::get('dashboard', [DashboardController::class,'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('CrudDashboard', [NuevoDashboard::class,'index'])
    ->middleware(['auth', 'verified'])
    ->name('CrudDashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
