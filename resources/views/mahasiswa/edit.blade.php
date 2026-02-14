<div class="container mt-5">
    <h2>Edit Data Mahasiswa</h2>
    <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
        @csrf
        @method('PUT') <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" readonly>
            <small class="text-muted">NIM tidak dapat diubah.</small>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ $mahasiswa->kelas }}" required>
        </div>
        <div class="mb-3">
            <label>Mata Kuliah</label>
            <input type="text" name="matakuliah" class="form-control" value="{{ $mahasiswa->matakuliah }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui Data</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>