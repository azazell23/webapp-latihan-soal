<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function(){
    return view('home_page_log');
});

Route::get('login', function(){
    return view('page_sign_in');
})->name('login');

Route::get('sign_up', function(){
    return view('page_sign_up');
})->name('sign_up');

Route::get('dashboard', function(){
      return view('dashboard');
});