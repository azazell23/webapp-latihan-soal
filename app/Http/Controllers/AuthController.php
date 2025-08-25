<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // shows the view for the login page for GET requests
    public function showLogin()
    {
        return view('auth.login');
    }

    // shows the view for the signup page for GET requests
    public function showSignup()
    {
        return view('auth.sign_up');
    }

    // logs the user in
    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|string|email|max:64',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request -> email, 'password' => $request->password])) {
            // Redirect to the dashboard if successful
            return redirect()->route('dashboard');
        }

        // Redirect back with an error message if login fails
        return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    // handles the signup logic for POST requests
    public function signup(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required|string|max:30',
            'email' => 'required|string|email|max:64|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the user
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log the user in
        Auth::login($user);

        // Redirect to the dashboard
        return redirect()->route('dashboard');
    }

    // logs the user out
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token
        $request->session()->regenerateToken();

        // Redirect to the home page or login page
        return redirect()->route('home');
    }
}
