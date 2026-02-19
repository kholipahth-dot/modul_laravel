<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    // ======================
    // INDEX (Tampilkan Data)
    // ======================
    public function index()
    {
        $matakuliahs = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    // ======================
    // CREATE (Form Tambah)
    // ======================
    public function create()
    {
        return view('matakuliah.create');
    }

    // ======================
    // STORE (Simpan Data)
    // ======================
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:matakuliahs,kode_mk',
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:6',
            'semester' => 'required|integer|min:1|max:8'
        ]);

        Matakuliah::create($request->all());

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil ditambahkan');
    }

    // ======================
    // SHOW (Detail Data)
    // ======================
    public function show($kode_mk)
    {
        $matakuliah = Matakuliah::findOrFail($kode_mk);
        return view('matakuliah.show', compact('matakuliah'));
    }

    // ======================
    // EDIT (Form Edit)
    // ======================
    public function edit($kode_mk)
    {
        $matakuliah = Matakuliah::findOrFail($kode_mk);
        return view('matakuliah.edit', compact('matakuliah'));
    }

    // ======================
    // UPDATE (Update Data)
    // ======================
    public function update(Request $request, $kode_mk)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:6',
            'semester' => 'required|integer|min:1|max:8'
        ]);

        $matakuliah = Matakuliah::findOrFail($kode_mk);
        $matakuliah->update($request->all());

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil diperbarui');
    }

    // ======================
    // DESTROY (Hapus Data)
    // ======================
    public function destroy($kode_mk)
    {
        Matakuliah::destroy($kode_mk);

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil dihapus');
    }
}