<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $data = [
            'Laskar Pelangi',
            'Bumi Manusia',
            'Negeri 5 Menara'
        ];

        return view('perpus.index', compact('data'));
    }

   public function show(string $id)
{
    return "Anda sedang melihat detail buku dengan Kode: " . $id;
}
}