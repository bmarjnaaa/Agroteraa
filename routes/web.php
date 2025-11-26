<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/kontak', function () {
    return view('kontak');
});

Route::view('/', 'index')->name('home');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::view('/berita', 'berita')->name('berita');
Route::view('/testimoni', 'testimoni')->name('testimoni');
Route::post('/kontak', [KontakController::class, 'submit'])->name('kontak.submit');
Route::get('/tentangkami', [TentangController::class, 'index'])->name('tentangkami');
// Route untuk menampilkan form login
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');

// Route untuk menghandle submit login
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// Route untuk menampilkan halaman lupa password admin
Route::get('/admin/password/forgot', [AdminController::class, 'showForgotPassword'])->name('admin.password.forgot');


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
