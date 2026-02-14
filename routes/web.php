<?php

use Illuminate\Support\Facades\Route;
// Pastikan baris ini ada di paling atas setelah <?php
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LatihanController;
 

Route::get('/', function () {
    return view('welcome');
}); 

Route::resource('mahasiswa',MahasiswaController::class);
 
Route::get('/latihan', [LatihanController::class, 'index']);
