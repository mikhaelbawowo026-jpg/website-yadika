<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\MajorController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes - SMK Yadika Manado
|--------------------------------------------------------------------------
*/

// ==========================================
// 1. Rute Halaman Publik (Frontend)
// ==========================================
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/profil', [PublicController::class, 'profile'])->name('profile');
Route::get('/jurusan', [PublicController::class, 'majorsIndex'])->name('majors.index');
Route::get('/jurusan/{slug}', [PublicController::class, 'majorDetail'])->name('majors.detail');
Route::get('/galeri', [PublicController::class, 'gallery'])->name('gallery');
Route::get('/spmb', [PublicController::class, 'spmb'])->name('spmb');
Route::post('/spmb', [PublicController::class, 'spmbStore'])->name('spmb.store');
Route::get('/kontak', [PublicController::class, 'contact'])->name('contact');

// ==========================================
// 2. Rute Panel Admin & Dashboard
// ==========================================
Route::middleware(['auth'])->group(function () {
    // Alias route 'dashboard' yang dipanggil otomatis oleh Laravel Breeze saat login
    Route::get('/dashboard', function () {
        return redirect()->route('admin.dashboard');
    })->name('dashboard');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', function () {
            $totalNews = class_exists(\App\Models\News::class) ? \App\Models\News::count() : 0;
            $totalStaff = class_exists(\App\Models\Staff::class) ? \App\Models\Staff::count() : 0;
            $totalGallery = class_exists(\App\Models\Gallery::class) ? \App\Models\Gallery::count() : 0;
            $totalRegistrations = class_exists(\App\Models\Registration::class) ? \App\Models\Registration::count() : 0;
            $registrations = class_exists(\App\Models\Registration::class) ? \App\Models\Registration::latest()->take(5)->get() : collect();

            return view('admin.dashboard', compact('totalNews', 'totalStaff', 'totalGallery', 'totalRegistrations', 'registrations'));
        })->name('dashboard');

        Route::resource('news', NewsController::class);
        Route::resource('staff', StaffController::class);
        Route::resource('majors', MajorController::class);
        Route::resource('gallery', GalleryController::class);
        Route::get('/registrations', [RegistrationController::class, 'index'])->name('registrations.index');
    });
});

require __DIR__.'/auth.php';
Route::get('/pendaftar', function () {
    return view('pages.pendaftar');
})->name('pendaftar');