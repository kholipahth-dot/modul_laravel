<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\LatihanController;

Route::get('/', function () {
    return view('welcome');
});

// PAKAI SALAH SATU, JANGAN KEDUANYA:

// OPSI 1: Pakai resource (REKOMENDASI - lebih sederhana)
Route::resource('mahasiswa', MahasiswaController::class);

// OPSI 2: Manual (kalau mau manual, hapus Route::resource di atas)
/*
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/{nim}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{nim}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
*/
Route::resource('matakuliah', MatakuliahController::class);

Route::get('/latihan', [LatihanController::class, 'index']);