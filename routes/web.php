<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AdminController;

// ========= PUBLIC =========

// Pilih salah satu home, jangan dobel route '/'
Route::view('/', 'index')->name('home');
// Kalau masih mau pakai welcome, jadikan route lain, misal:
// Route::view('/welcome', 'welcome')->name('welcome');

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::view('/berita', 'berita')->name('berita');
Route::view('/testimoni', 'testimoni')->name('testimoni');
Route::post('/kontak', [KontakController::class, 'submit'])->name('kontak.submit');
Route::get('/tentangkami', [TentangController::class, 'index'])->name('tentangkami');

// ========= ADMIN AUTH =========

// Halaman login admin
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
// Proses login admin
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// ========= USER DASHBOARD (FORTIFY/VOLT) =========

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});
