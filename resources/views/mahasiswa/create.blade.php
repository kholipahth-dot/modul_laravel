@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Mahasiswa</h2>
    
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') }}" required>
            @error('nim')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" value="{{ old('kelas') }}" required>
            @error('kelas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
    <label>Mata Kuliah</label>
    <select name="kode_mk" class="form-control">
        <option value="">-- Pilih Mata Kuliah --</option>
        @foreach($matakuliahs as $mk)
            <option value="{{ $mk->kode_mk }}">
                {{ $mk->nama_mk }}
            </option>
        @endforeach
    </select>
</div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection