<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CV Ardi Ramadhan</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(180deg, #e6f0ff, #f9fbff);
        }

        .card {
            width: 850px;
            background: #ffffff;
            margin: 40px auto;
            padding: 40px 60px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,.12);
        }

        .header {
            text-align: center;
        }

        .header img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #3b82f6;
            margin: 15px 0;
        }

        .header h1 {
            margin: 0;
            font-size: 26px;
        }

        .header small {
            display: block;
            color: #555;
            letter-spacing: 1px;
            margin-top: 4px;
        }

        .section {
            margin-top: 35px;
        }

        .section h3 {
            color: #2563eb;
            border-left: 4px solid #2563eb;
            padding-left: 10px;
            margin-bottom: 12px;
        }

        .section p {
            text-align: justify;
            line-height: 1.6;
            font-size: 14px;
        }

        ul {
            padding-left: 18px;
            font-size: 14px;
        }

        ul li {
            margin-bottom: 6px;
        }

        .contact {
            background: #f4f7fb;
            padding: 15px;
            border-radius: 8px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="card">

    <!-- HEADER -->
    <div class="header">
        <h1>Ardi Ramadhan</h1>
        <small>AKUNTAN</small>
        <img src="{{ asset('images/absurd.jpeg') }}" alt="Foto Ardi">
    </div>

    <!-- TENTANG -->
    <div class="section">
        <h3>Tentang Saya</h3>
        <p>
            Saya adalah seorang fresh graduate yang memiliki semangat tinggi untuk
            belajar dan berkembang di dunia kerja. Terbiasa bekerja dalam tim, cepat
            beradaptasi, dan mampu mempelajari hal baru dengan cepat. Saya tertarik
            pada bidang administrasi, akuntansi dan pelayanan.
        </p>
    </div>

    <!-- PENDIDIKAN -->
    <div class="section">
        <h3>Pendidikan</h3>
        <ul>
            <li>2024 – Sekarang | STMIK IKMI – Komputerisasi Akuntansi</li>
            <li>2019 – 2022 | SMKN 1 Jambang – Teknik Komputer dan Jaringan</li>
            <li>2016 – 2019 | MTsN 4 Cirebon</li>
            <li>2010 – 2016 | SDN 1 Weru Lor</li>
        </ul>
    </div>

    <!-- KEAHLIAN -->
    <div class="section">
        <h3>Keahlian</h3>
        <ul>
            <li>HTML & CSS Dasar</li>
            <li>Laravel Dasar</li>
            <li>Desain Web Dasar</li>
            <li>Microsoft Word & Excel</li>
            <li>Accurate</li>
        </ul>
    </div>

    <!-- KONTAK -->
    <div class="section">
        <h3>Kontak</h3>
        <div class="contact">
            Email : ardiramadhan@gmail.com
        </div>
    </div>

</div>

</body>
</html>
