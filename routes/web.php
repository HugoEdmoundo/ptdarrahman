<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('home'); });
/*
|--------------------------------------------------------------------------
| Halaman Publik (Website Pesantren)
|--------------------------------------------------------------------------
*/
Route::get('/', fn() => view('home'))->name('home');

// Profil
Route::get('/tentang-kami', fn() => view('tentang-kami'))->name('tentang.kami');
Route::get('/guru-staff', fn() => view('guru-staff'))->name('guru.staff');
Route::get('/fasilitas', fn() => view('fasilitas'))->name('fasilitas');
Route::get('/tentang-organisasi', fn() => view('tentang-organisasi'))->name('tentang.organisasi');
Route::get('/prestasi', fn() => view('prestasi'))->name('prestasi');

// Akademik
Route::get('/kurikulum', fn() => view('kurikulum'))->name('kurikulum');
Route::get('/kalender-akademik', fn() => view('kalender-akademik'))->name('kalender.akademik');
Route::get('/ekstrakurikuler', fn() => view('ekstrakurikuler'))->name('ekstrakurikuler');
Route::get('/data-santri', fn() => view('data-santri'))->name('data.santri');

// Informasi
Route::get('/info-ppdb', fn() => view('info-ppdb'))->name('info.ppdb');
Route::get('/kunjungan', fn() => view('kunjungan'))->name('kunjungan');
Route::get('/hafalan', fn() => view('hafalan'))->name('hafalan');

// Umum
Route::get('/galeri', fn() => view('galeri'))->name('galeri');
Route::get('/berita', fn() => view('berita'))->name('berita');

/*
|--------------------------------------------------------------------------
| Member Area
|--------------------------------------------------------------------------
| Flow: Home -> Loading -> Welcome Breeze
*/
/// Member Area → masuk ke index (loading screen)
Route::get('/member-area', fn() => view('index'))->name('loading');

// Setelah loading, redirect ke welcome Breeze
Route::get('/welcome', fn() => view('welcome'))->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include rute autentikasi
require __DIR__.'/auth.php';