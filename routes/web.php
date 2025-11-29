<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BeritaController; // Tambahkan import
use App\Http\Controllers\TestimonialController; // Tambahkan import
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Livewire\Actions\Logout;

// ========= PUBLIC =========

// Pilih salah satu home, jangan dobel route '/'
Route::get('/', [HomeController::class, 'index'])->name('home'); // Atau controller lain
// Kalau masih mau pakai welcome, jadikan route lain, misal:
// Route::view('/welcome', 'welcome')->name('welcome');

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/testimoni', [TestimonialController::class, 'index'])->name('testimoni');
Route::post('/kontak', [KontakController::class, 'kirimPesan'])->name('kontak');
Route::get('/tentangkami', [TentangController::class, 'index'])->name('tentangkami');

// ========= ADMIN AUTH =========

// Halaman login admin
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
// Proses login admin
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
// Tambahkan route untuk dashboard admin (setelah login)
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');

// ========= ADMIN CRUD ROUTES (TAMBAHKAN INI) =========
Route::middleware(['auth'])->group(function () {
    // User (Akun)
    Route::get('/admin/users', [AdminController::class, 'usersIndex'])->name('admin.users.index');
    Route::get('/admin/users/create', [AdminController::class, 'usersCreate'])->name('admin.users.create');
    Route::post('/admin/users', [AdminController::class, 'usersStore'])->name('admin.users.store');
    Route::get('/admin/users/{user}/edit', [AdminController::class, 'usersEdit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [AdminController::class, 'usersUpdate'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [AdminController::class, 'usersDestroy'])->name('admin.users.destroy');

    // Produk
    Route::get('/admin/products', [ProdukController::class, 'adminIndex'])->name('admin.products.index');
    Route::get('/admin/products/create', [ProdukController::class, 'create'])->name('admin.products.create');
    Route::post('/admin/products', [ProdukController::class, 'store'])->name('admin.products.store');
    Route::get('/admin/products/{product}/edit', [ProdukController::class, 'edit'])->name('admin.products.edit');
    Route::put('/admin/products/{product}', [ProdukController::class, 'update'])->name('admin.products.update');
    Route::delete('/admin/products/{product}', [ProdukController::class, 'destroy'])->name('admin.products.destroy');

    // Berita
    Route::get('/admin/news', [BeritaController::class, 'adminIndex'])->name('admin.news.index');
    Route::get('/admin/news/create', [BeritaController::class, 'create'])->name('admin.news.create');
    Route::post('/admin/news', [BeritaController::class, 'store'])->name('admin.news.store');
    Route::get('/admin/news/{news}/edit', [BeritaController::class, 'edit'])->name('admin.news.edit');
    Route::put('/admin/news/{news}', [BeritaController::class, 'update'])->name('admin.news.update');
    Route::delete('/admin/news/{news}', [BeritaController::class, 'destroy'])->name('admin.news.destroy');

    // Testimonial
    Route::get('/admin/testimonials', [TestimonialController::class, 'adminIndex'])->name('admin.testimonials.index');
    Route::get('/admin/testimonials/create', [TestimonialController::class, 'create'])->name('admin.testimonials.create');
    Route::post('/admin/testimonials', [TestimonialController::class, 'store'])->name('admin.testimonials.store');
    Route::get('/admin/testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('admin.testimonials.edit');
    Route::put('/admin/testimonials/{testimonial}', [TestimonialController::class, 'update'])->name('admin.testimonials.update');
    Route::delete('/admin/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('admin.testimonials.destroy');
});

Route::post('/logout', Logout::class)->name('logout'); 
// atau bisa juga Route::get sesuai preferensi, tapi POST disarankan untuk logout

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