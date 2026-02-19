<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2>Tambah Mata Kuliah</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Kode MK</label>
            <input type="text" name="kode_mk" class="form-control">
        </div>

        <div class="mb-3">
            <label>Nama MK</label>
            <input type="text" name="nama_mk" class="form-control">
        </div>

        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control">
        </div>

        <div class="mb-3">
            <label>Semester</label>
            <input type="number" name="semester" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

</body>
</html>