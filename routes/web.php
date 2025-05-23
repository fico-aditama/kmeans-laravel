<?php

use App\Http\Controllers\Admin\PendudukController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DataHasilController;
use App\Http\Controllers\Admin\LaporanHasilController;
use App\Http\Controllers\Admin\UserController; 
use App\Http\Controllers\Admin\KriteriaController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::view('dashboard', 'admin.dashboard')->name('dashboard');
    
    Route::resource('users', UserController::class);
    Route::resource('kriteria', KriteriaController::class)->parameters([
        'kriteria' => 'kriteria'
    ]);
    Route::post('penduduk/import', [PendudukController::class, 'import'])->name('penduduk.import');
    Route::get('penduduk/export', [PendudukController::class, 'export'])->name('penduduk.export');
    Route::get('penduduk/format', [PendudukController::class, 'format'])->name('penduduk.format');
    Route::get('penduduk/cetak', [PendudukController::class, 'cetak'])->name('penduduk.cetak');
    Route::resource('penduduk', PendudukController::class)->except(['show']);

    Route::get('datahasil', [DataHasilController::class, 'index'])->name('datahasil.index');
    Route::get('datahasil/export', [DataHasilController::class, 'export'])->name('datahasil.export');
    Route::get('datahasil/proses', [DataHasilController::class, 'proses'])->name('datahasil.proses');
    Route::get('laporanhasil', [LaporanHasilController::class, 'index'])->name('laporanhasil.index');
    Route::get('laporanhasil/export', [LaporanHasilController::class, 'export'])->name('laporanhasil.export');
});