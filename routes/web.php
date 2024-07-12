<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\SocialiteController;

use Illuminate\Support\Facades\Route;

// Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// Authentication Middleware Group
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Google Login Routes
    Route::get('/auth/redirect', [SocialiteController::class, 'redirect'])->name('auth.redirect');
    Route::get('/auth/google/callback', [SocialiteController::class, 'callback'])->name('auth.callback');

    // Kriteria Resource Routes
    Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria.index');
    Route::get('/kriteria/create', [KriteriaController::class, 'create'])->name('kriteria.create');
    Route::post('/kriteria', [KriteriaController::class, 'store'])->name('kriteria.store');
    Route::get('/kriteria/{id}', [KriteriaController::class, 'show'])->name('kriteria.show');
    Route::get('/kriteria/{id}/edit', [KriteriaController::class, 'edit'])->name('kriteria.edit');
    Route::put('/kriteria/{id}', [KriteriaController::class, 'update'])->name('kriteria.update');
    Route::delete('/kriteria/{id}', [KriteriaController::class, 'destroy'])->name('kriteria.destroy');
    Route::delete('/kriteria/destroy/all', [KriteriaController::class, 'destroyAll'])->name('kriteria.destroy.all');

    // Alternatif Resource Routes
    Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif.index');
    Route::get('/alternatif/create', [AlternatifController::class, 'create'])->name('alternatif.create');
    Route::post('/alternatif', [AlternatifController::class, 'store'])->name('alternatif.store');
    Route::get('/alternatif/{id}', [AlternatifController::class, 'show'])->name('alternatif.show');
    Route::get('/alternatif/{id}/edit', [AlternatifController::class, 'edit'])->name('alternatif.edit');
    Route::put('/alternatif/{id}', [AlternatifController::class, 'update'])->name('alternatif.update');
    Route::delete('/alternatif/{id}', [AlternatifController::class, 'destroy'])->name('alternatif.destroy');

    // Nilai Routes
    Route::get('/penilaian', [NilaiController::class, 'create'])->name('nilai.create');
    Route::post('/nilai', [NilaiController::class, 'store'])->name('nilai.store');

    // Hitung Route
    Route::get('/hasil-saw', [HitungController::class, 'index'])->name('hitung.index');

    Route::post('/nilai/clear', [NilaiController::class, 'clear'])->name('nilai.clear');
});


// Authentication Routes (from auth.php)
require __DIR__.'/auth.php';
