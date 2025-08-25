<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;


Route::middleware('guest')->group(function (){
    Route::get('/', [AppController::class, 'showHome'])->name('home');
    Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
    Route::get('/signup', [AuthController::class, 'showSignup'])->name('showSignup');

    Route::post('/signup', [AuthController::class, 'signup'])->name('authSignup');
    Route::post('/login', [AuthController::class, 'login'])->name('authLogin');
 
});

Route::middleware('auth')->group(function(){
    Route::post('/logout', [AuthController::class, 'logout'])->name('authLogout');
});