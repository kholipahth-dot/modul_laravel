<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Data Mahasiswa</h3>
            </div>
            <div class="card-body">
                <!-- Tombol Tambah Data (opsional) -->
                <div class="mb-3">
                    <a href="#" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i> Tambah Mahasiswa
                    </a>
                </div>

                <!-- Tabel Data Mahasiswa -->
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Matakuliah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($mahasiswas as $mahasiswa)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->kelas }}</td>
                                <td>{{ $mahasiswa->matakuliah }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <!-- Tombol Edit -->
                                        <a href="#" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <!-- Tombol Hapus -->
                                        <form action="#" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" 
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Menampilkan pesan jika data kosong -->
                @if($mahasiswas->isEmpty())
                <div class="alert alert-info text-center">
                    <i class="bi bi-info-circle"></i> Belum ada data mahasiswa.
                </div>
                @endif
            </div>
            <div class="card-footer text-muted">
                Total Data: {{ $mahasiswas->count() }}
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS dengan Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <!-- Script untuk konfirmasi hapus -->
    <script>
        // Menambahkan konfirmasi sebelum menghapus data
        document.addEventListener('DOMContentLoaded', function() {
            const deleteForms = document.querySelectorAll('form[action="#"]');
            
            deleteForms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                        // Di sini Anda bisa menambahkan logika untuk menghapus data
                        // Untuk sekarang, kita hanya akan menampilkan alert
                        alert('Fitur hapus belum diimplementasikan.');
                    }
                });
            });
        });
    </script>
</body>
</html>