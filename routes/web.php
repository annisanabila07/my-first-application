<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PotensiDesaController;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\PotensiDesa;

Route::get('/', function () {
    $berita = App\Models\Berita::latest()->take(2)->get();
    $galeri = App\Models\Galeri::latest()->take(4)->get();
    $potensi = App\Models\PotensiDesa::all();

    return view('beranda', compact('berita', 'galeri', 'potensi'));
});

// 2. Halaman Kelola Data Admin (Back-End)
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('berita', BeritaController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('potensi-desa', PotensiDesaController::class);
});