<!DOCTYPE html>
<html>
<head>
    <title>Welcome Mahasiswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: linear-gradient(135deg, #cfd9ff, #f5f7ff);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            width: 420px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
            text-align: center;
            animation: fadeIn 0.8s ease-in-out;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        p {
            color: #555;
        }

        ul {
            text-align: left;
            margin-top: 15px;
            padding-left: 25px;
        }

        ul li {
            margin-bottom: 8px;
            color: #34495e;
        }

        .footer {
            margin-top: 20px;
            font-size: 13px;
            color: #888;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

<div class="box">
    <h1>👋 Selamat Datang</h1>
    <h3>{{ $nama }}</h3>

    <p>📚 <b>Daftar Mata Kuliah</b></p>

    <ul>
        @foreach ($mata_kuliah as $mk)
            <li>✔ {{ $mk }}</li>
        @endforeach
    </ul>

    <div class="footer">
        <i>Halaman ini dibuat menggunakan Laravel 12 dengan bantuan AI (DeepSeek)</i>
    </div>
</div>

</body>
</html>