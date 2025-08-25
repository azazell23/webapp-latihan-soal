<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::prefix('/dashboard')->middleware('auth')->group(function()
{
    Route::get('/', [AppController::class, 'showDashboard'])->name('dashboard');
    // Route::get('/profile', [AppController::class, 'profile'])->name('profile');
    // Route::get('/settings', [AppController::class, 'settings'])->name('settings');
});

require __DIR__. '/auth.php';