<!DOCTYPE html>
<html>
<head>
    <title>Detail Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2>Detail Mata Kuliah</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Kode MK:</strong> {{ $matakuliah->kode_mk }}</p>
            <p><strong>Nama MK:</strong> {{ $matakuliah->nama_mk }}</p>
            <p><strong>SKS:</strong> {{ $matakuliah->sks }}</p>
            <p><strong>Semester:</strong> {{ $matakuliah->semester }}</p>
        </div>
    </div>

    <hr>

    <h4>Daftar Mahasiswa yang Mengambil Mata Kuliah Ini</h4>

    @if($matakuliah->mahasiswas->count() > 0)
        <ul class="list-group">
            @foreach($matakuliah->mahasiswas as $mhs)
                <li class="list-group-item">
                    {{ $mhs->nama }} ({{ $mhs->nim }})
                </li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-warning">
            Belum ada mahasiswa yang mengambil mata kuliah ini.
        </div>
    @endif

    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary mt-3">Kembali</a>

</body>
</html>