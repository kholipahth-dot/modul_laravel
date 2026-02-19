<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $mahasiswas = Mahasiswa::with('matakuliah')->get();
    return view('mahasiswa.index', compact('mahasiswas'));
}

    /**
     * Show the form for creating a new resource.
     */

public function create()
{
    $matakuliahs = Matakuliah::all();
    return view('mahasiswa.create', compact('matakuliahs'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nim' => 'required|unique:mahasiswas,nim',
        'nama' => 'required',
        'kelas' => 'required',
        'kode_mk' => 'required'
    ]);

    Mahasiswa::create([
        'nim' => $request->nim,
        'nama' => $request->nama,
        'kelas' => $request->kelas,
        'kode_mk' => $request->kode_mk,
    ]);

    return redirect()->route('mahasiswa.index')
        ->with('success', 'Data berhasil disimpan');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Kosongkan saja jika tidak dipakai
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $nim)
{
    $request->validate([
        'nama' => 'required',
        'kelas' => 'required',
        'kode_mk' => 'required',
    ]);

    $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();

    $mahasiswa->update([
        'nama' => $request->nama,
        'kelas' => $request->kelas,
        'kode_mk' => $request->kode_mk,
    ]);

    return redirect()->route('mahasiswa.index')
        ->with('success', 'Data berhasil diperbarui');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nim)
    {
        Mahasiswa::destroy($nim);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
}