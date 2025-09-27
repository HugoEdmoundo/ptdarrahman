<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\DashboardController;


// Root redirect ke home
Route::get('/', function() { 
    return redirect()->route('home'); 
});
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
Route::get('/login', fn() => view('login'))->name('login');

// Login / Logout (Breeze)
Route::middleware('guest')->group(function() {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Profile
Route::middleware('auth')->group(function() {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboard redirect sesuai role
Route::middleware('auth')->get('/dashboard', function() {
    $role = auth()->user()->role;
    switch($role) {
        case 'superadmin': return redirect()->route('dashboard.superadmin');
        case 'admin': return redirect()->route('dashboard.admin');
        case 'guru': return redirect()->route('dashboard.guru');
        case 'murid': return redirect()->route('dashboard.murid');
        default: return redirect('/');
    }
})->name('dashboard');

// Dashboard per role
Route::middleware('auth')->group(function() {
    Route::get('/dashboard/superadmin', [DashboardController::class, 'superadmin'])->name('dashboard.superadmin');
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
    Route::get('/dashboard/guru', [DashboardController::class, 'guru'])->name('dashboard.guru');
    Route::get('/dashboard/murid', [DashboardController::class, 'murid'])->name('dashboard.murid');
});

// =========================
// Superadmin & Admin - Full Access
// =========================
Route::middleware(['auth','can:isAdminOrSuperadmin'])->group(function() {
    Route::get('/cms', function() { return view('cms.index'); })->name('cms');
    Route::get('/pelanggaran', function() { return view('pelanggaran.index'); })->name('pelanggaran');
    Route::get('/inventaris', function() { return view('inventaris.index'); })->name('inventaris');
    Route::get('/kunjungan', function() { return view('kunjungan.index'); })->name('kunjungan');
    Route::get('/akademik', [AkademikController::class, 'index'])->name('akademik.index');
    Route::get('/rapor', function() { return view('rapor.index'); })->name('rapor');
    Route::get('/absen', function() { return view('absen.index'); })->name('absen');
});

// =========================
// Guru - Conditional Access
// =========================
Route::middleware(['auth','can:isGuru'])->group(function() {
    // Akademik untuk guru
    Route::get('/guru/akademik/{mapel}', [AkademikController::class, 'showGuru'])->name('akademik.guru.show');
    Route::get('/guru/absen', function() { return view('absen.guru'); })->name('absen.guru');
    
    // Akses bersyarat
    Route::middleware('can:inventaris')->group(function() {
        Route::get('/guru/inventaris', function() { return view('inventaris.guru'); })->name('inventaris.guru');
    });

    Route::middleware('can:pelanggaran')->group(function() {
        Route::get('/guru/pelanggaran', function() { return view('pelanggaran.guru'); })->name('pelanggaran.guru');
    });

    // Route kompatibilitas
    Route::get('/akademik/{mapel}', [AkademikController::class, 'show'])->name('akademik.show');
});

// =========================
// Murid - Limited Access
// =========================
Route::middleware(['auth','can:isMurid'])->group(function() {
    Route::get('/murid/pelanggaran', function() { return view('pelanggaran.murid'); })->name('pelanggaran.murid');
    Route::get('/murid/absen', function() { return view('absen.murid'); })->name('absen.murid');
    Route::get('/murid/akademik/{mapel}', [AkademikController::class, 'showMurid'])->name('akademik.murid.show');
    
    // Route kompatibilitas
    Route::get('/akademik/{mapel}', [AkademikController::class, 'show'])->name('akademik.show');
});

require __DIR__.'/auth.php';