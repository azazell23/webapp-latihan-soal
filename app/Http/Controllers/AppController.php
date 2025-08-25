<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    // shows the index page for GET requests
    public function showHome()
    {
        return view('home_page');
    }

    public function showDashboard()
    {
        return view('dashboard');
    }
}