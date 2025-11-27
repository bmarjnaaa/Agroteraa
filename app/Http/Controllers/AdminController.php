<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // kalau admin pakai model lain, ganti di sini

class AdminController extends Controller
{
    // Tampilkan form login admin
    public function showLogin()
    {
        return view('auth.login');
    }

    // Proses login admin
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password tidak sesuai.',
        ]);
    }

    // Tambahkan method untuk dashboard admin
    public function dashboard()
    {
        // Jika perlu data dinamis (misalnya list akun), ambil di sini dan pass ke view
        // Contoh: $users = User::all(); return view('lifewire.partials.admin_layout', compact('users'));
        
        return view('lifewire.partials.admin_layout');
    }
}
