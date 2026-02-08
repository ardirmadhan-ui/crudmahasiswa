<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/cvai', function () {
    return view('cvai');
});


// Route untuk menampilkan halaman
use App\Http\Controllers\LatihanController;

Route::get('/latihan', [LatihanController::class, 'index']);
Route::get('/latihan/{id}', [LatihanController::class, 'detail']);

use App\Http\Controllers\MahasiswaController;

Route::resource('mahasiswa', MahasiswaController::class);
