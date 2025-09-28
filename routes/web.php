<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\SppController;

/*
|--------------------------------------------------------------------------
| Halaman Publik
|--------------------------------------------------------------------------
*/
Route::get('/', fn() => view('home'))->name('home');
Route::view('/tentang-kami', 'tentang-kami')->name('tentang.kami');
Route::view('/guru-staff', 'guru-staff')->name('guru.staff');
Route::view('/fasilitas', 'fasilitas')->name('fasilitas');
Route::view('/tentang-organisasi', 'tentang-organisasi')->name('tentang.organisasi');
Route::view('/prestasi', 'prestasi')->name('prestasi');
Route::view('/kurikulum', 'kurikulum')->name('kurikulum');
Route::view('/kalender-akademik', 'kalender-akademik')->name('kalender.akademik');
Route::view('/ekstrakurikuler', 'ekstrakurikuler')->name('ekstrakurikuler');
Route::view('/data-santri', 'data-santri')->name('data.santri');
Route::view('/info-ppdb', 'info-ppdb')->name('info.ppdb');
Route::view('/kunjungan', 'kunjungan')->name('kunjungan');
Route::view('/hafalan', 'hafalan')->name('hafalan');
Route::view('/galeri', 'galeri')->name('galeri');
Route::view('/berita', 'berita')->name('berita');

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function() {
    Route::get('/login', [AuthenticatedSessionController::class,'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class,'store']);
});
Route::post('/logout', [AuthenticatedSessionController::class,'destroy'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function() {
    Route::get('/profile', [ProfileController::class,'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class,'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class,'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->get('/dashboard', function() {
    return match(auth()->user()->role) {
        'superadmin' => redirect()->route('dashboard.superadmin'),
        'admin'      => redirect()->route('dashboard.admin'),
        'guru'       => redirect()->route('dashboard.guru'),
        'murid'      => redirect()->route('dashboard.murid'),
        default      => redirect('/'),
    };
})->name('dashboard');

Route::middleware('auth')->group(function() {
    Route::get('/dashboard/superadmin', [DashboardController::class,'superadmin'])->name('dashboard.superadmin');
    Route::get('/dashboard/admin', [DashboardController::class,'admin'])->name('dashboard.admin');
    Route::get('/dashboard/guru', [DashboardController::class,'guru'])->name('dashboard.guru');
    Route::get('/dashboard/murid', [DashboardController::class,'murid'])->name('dashboard.murid');
});

/*
|--------------------------------------------------------------------------
| Superadmin & Admin
|--------------------------------------------------------------------------
*/
Route::middleware(['auth','can:isAdminOrSuperadmin'])->group(function() {
    Route::view('/cms', 'cms.index')->name('cms');
    Route::view('/pelanggaran', 'pelanggaran.index')->name('pelanggaran');
    Route::view('/inventaris', 'inventaris.index')->name('inventaris');
    Route::view('/kunjungan', 'kunjungan.index')->name('kunjungan');
    Route::get('/akademik', [AkademikController::class,'index'])->name('akademik.index');
    Route::view('/rapor', 'rapor.index')->name('rapor');
    Route::view('/absen', 'absen.index')->name('absen');

    // 🔹 SPP Admin
    Route::get('/spp/admin', [SppController::class,'adminIndex'])->name('spp.admin');
    Route::get('/spp/verify', [SppController::class,'verifyIndex'])->name('spp.verify.index');
    Route::get('/spp/verify/{payment}', [SppController::class,'verify'])->name('spp.verify');
    Route::post('/spp/approve/{payment}', [SppController::class,'approve'])->name('spp.approve');
    Route::post('/spp/reject/{payment}', [SppController::class,'reject'])->name('spp.reject');

    // Data Murid
    Route::get('/spp/students', [SppController::class,'students'])->name('spp.students');

    // Laporan
    Route::get('/spp/report', [SppController::class,'report'])->name('spp.report');

    // Export
    Route::get('/spp/export/{type}', [SppController::class,'export'])->name('spp.export');
});

/*
|--------------------------------------------------------------------------
| Guru
|--------------------------------------------------------------------------
*/
Route::middleware(['auth','can:isGuru'])->group(function() {
    Route::get('/guru/akademik', [AkademikController::class,'index'])->name('akademik.index');
    Route::view('/guru/absen', 'absen.guru')->name('absen.guru');
    Route::view('/guru/inventaris', 'inventaris.guru')->middleware('can:inventaris')->name('inventaris.guru');
    Route::view('/guru/pelanggaran', 'pelanggaran.guru')->middleware('can:pelanggaran')->name('pelanggaran.guru');
});

/*
|--------------------------------------------------------------------------
| Murid
|--------------------------------------------------------------------------
*/
Route::middleware(['auth','can:isMurid'])->group(function() {
    Route::get('/murid/akademik', [AkademikController::class,'index'])->name('akademik.murid.show');
    Route::view('/murid/pelanggaran', 'pelanggaran.murid')->name('pelanggaran.murid');
    Route::view('/murid/absen', 'absen.murid')->name('absen.murid');

    // 🔹 SPP Murid
    Route::get('/spp', [SppController::class,'index'])->name('spp.index');
    Route::get('/spp/create', [SppController::class,'create'])->name('spp.create');
    Route::post('/spp', [SppController::class,'store'])->name('spp.store');
});

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Member Area
|--------------------------------------------------------------------------
*/
Route::view('/member-area', 'index')->name('loading');
