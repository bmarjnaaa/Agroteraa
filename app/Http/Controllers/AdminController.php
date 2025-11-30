<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Import model User untuk CRUD         // Import model User
use App\Models\News;         // Import model News  <<< Pastikan ini ada
use App\Models\Product;      // Import model Product <<< Pastikan ini ada
use App\Models\Testimonial;

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

    // Method untuk dashboard admin
    public function dashboard()
    {
        // Statistik dasar
        $totalUsers = User::count();
        $totalNews = News::count();  // Tambah ini
        $totalProducts = Product::count();  // Tambah ini
        $totalTestimonials = Testimonial::count();  // Tambah ini
        // Data terbaru (ambil 5 terakhir)
        $latestNews = News::latest()->take(5)->get();  // Tambah ini
        $latestProducts = Product::latest()->take(5)->get();  // Tambah ini
        $latestTestimonials = Testimonial::latest()->take(5)->get();  // Tambah ini
        // Ambil data user untuk submenu akun (tetap ada)
        $users = User::all(); 
        
        // Pass semua data ke view
        return view('dashboard', compact(
            'users', 'totalUsers', 'totalNews', 'totalProducts', 'totalTestimonials',
            'latestNews', 'latestProducts', 'latestTestimonials'
        ));
    }

    // ========= METHOD BARU UNTUK CRUD USER (AKUN) =========

    // Tampilkan daftar user
    public function usersIndex()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    // Form tambah user
    public function usersCreate()
    {
        return view('admin.users.create');
    }

    // Simpan user baru
    public function usersStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'plain_password' => $request->password, // Tambah simpan plain password
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil ditambahkan!');
    }

    // Form edit user
    public function usersEdit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // Update user
    public function usersUpdate(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $updateData = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if ($request->password) {
            $updateData['password'] = bcrypt($request->password);
            $updateData['plain_password'] = $request->password; // Tambah update plain password jika diubah
        }

        $user->update($updateData);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil diupdate!');
    }

    // Hapus user
    public function usersDestroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus!');
    }
}
