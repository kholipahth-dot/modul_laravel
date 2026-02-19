<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2>Data Mata Kuliah</h2>

    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">
        Tambah Mata Kuliah
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode MK</th>
                <th>Nama MK</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matakuliahs as $mk)
            <tr>
                <td>{{ $mk->kode_mk }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                <td>{{ $mk->semester }}</td>
                <td>
                    <a href="{{ route('matakuliah.edit',$mk->kode_mk) }}"
                       class="btn btn-warning btn-sm">Edit</a>
                                                      </td>
                                                  </tr>
                                                  @endforeach
                                              </tbody>