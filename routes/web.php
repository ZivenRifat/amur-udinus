<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ContributorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute Halaman Kontributor
Route::get('/kontributor', [ContributorController::class, 'index'])->name('contributors.index');

// Rute Halaman Berita
Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');

// Rute Halaman Koleksi
Route::get('/koleksi', [CollectionController::class, 'index'])->name('collection.index');

// Rute Halaman Mitra
Route::get('/mitra', [PartnerController::class, 'index'])->name('partners');
