<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Method untuk menampilkan form login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Method untuk menangani login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors(['email' => 'The provided credentials are incorrect.']);
    }

    // Method untuk menampilkan halaman lupa password admin
    public function showForgotPassword()
    {
        return view('auth.forgot-password'); // Pastikan kamu memiliki file forgot-password.blade.php
    }
}
