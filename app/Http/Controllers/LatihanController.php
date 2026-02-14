<?php

namespace App\Http\Controllers;

class LatihanController extends Controller
{
    public function index()
    {
        $nama = "Mahasiswa STMIK IKMI";

        $mata_kuliah = [
            "Pemrograman Web lanjut",
            "Machine Learning & Dasar(Clastering algorithm)",
            "Perancangan basis data & Pemrograman SQL(Oracle1)",
            "Sistem Informasi Akuntansi Dasar",
            "Pembuatan aplikasi akuntansi 1",
            "Etika Profesi"
        ];

        return view('welcome_mahasiswa', compact('nama', 'mata_kuliah'));
    }
}