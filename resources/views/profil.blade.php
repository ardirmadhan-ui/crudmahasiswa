<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Mahasiswa</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: #ffffff;
            width: 350px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            text-align: center;
        }

        .card img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        h2 {
            margin-bottom: 20px;
        }

        p {
            text-align: left;
            margin: 6px 0;
            font-size: 14px;
        }

        p strong {
            display: inline-block;
            width: 130px;
        }
    </style>
</head>
<body>

<div class="card">
    <img src="{{ asset('images/absurd.jpeg') }}" alt="Foto Mahasiswa">

    <h2>Profil Mahasiswa</h2>

    <p><strong>Nama Lengkap:</strong> Ardi Ramadhan</p>
    <p><strong>NIM:</strong> 32241628</p>
    <p><strong>Program Studi:</strong> Komputerisasi Akuntansi</p>
    <p><strong>Mata Kuliah:</strong> Pemrograman Web Lanjut</p>
    <p><strong>Tahun Akademik:</strong> 2025/2026</p>
</div>

</body>
</html>
