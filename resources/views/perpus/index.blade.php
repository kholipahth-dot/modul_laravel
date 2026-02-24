<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <ul>
        @foreach($data as $buku)
            <li>{{ $buku }}</li>
        @endforeach
    </ul>

</body>
</html>