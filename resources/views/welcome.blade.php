<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Informasi Antrian </title>
    @stack('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="bg-danger" style="height: 60px;"></div>
    <div class="h3 text-white" style="position: absolute; left: 130px; transform: translateY(-150%);">Telkomedika</div>
    <a class="text-danger btn btn-light btn-sm;" style="position: absolute; right: 50px; transform: translateY(-130%)" href="">Login</a></div>

</div>
    <img src="{{ asset('logo/Telkomedika.png')}}" width="50px" style="position: absolute; left: 70px; transform: translateY(-115%);">
</head>
<body>
<style>
        /* CSS untuk membuat gambar full layar */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .background-image {
            background-image: url('logo/gambar dashboard.png'); /* Ganti 'path/ke/gambar/dashboard.png' dengan path ke gambar Anda */
            background-size: cover;
            background-position: center;
            height: 100%;
        }
        .overlay {
            /* Untuk menambahkan lapisan transparan */
            position: absolute;
            top: 60px;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3); /* Ubah opasitas sesuai kebutuhan */
        }
        .content {
            position: relative;
            z-index: 1; /* Pastikan konten muncul di atas lapisan transparan */
            color: white; /* Warna teks untuk kontras */
            padding: 50px;
            font-family: 'Montserrat', sans-serif;

        }
        .selamat {
            color: #343a40; /* Warna abu */
        }

        .datangdi {
            color: #343a40; /* Warna abu */
        }

        .telkomedika {
            color: #D30000; /* Warna merah */
        }
    </style>
    @yield('main-section')

    <div class="background-image">
        <div class="overlay"></div>
        <div class="content">
        <h1 class="h1 text-white" style="font-size: 50px; position: absolute; left: 100px; transform: translateY(50%)"><strong> <span class="selamat">Selamat</span> <br> <span class="datangdi">Datang di</span> <br> <span class="telkomedika">Telkomedika.</span></strong></h1>
        <h1 class="h4 text-white" style="font-size: 15px; position: absolute; left: 100px; transform: translateY(510%)">Klinik Telkomedika adalah sebuah fasilitas pelayanan kesehatan yang disediakan oleh TelkomUniversity.<br>
        Klinik ini menyediakan berbagai layanan medis dan kesehatan  seperti pemeriksaan kesehatan umum,<br>  konsultasi medis,
        perawatan rawat jalan, Poli Mata, Poli Gigi, dan mungkin juga layanan kesehatan lainnya.</h1>

        <a class="btn btn-danger btn-sm;" style="position: absolute; left: 100px; transform: translateY(910%)" href="">Register</a></div>

</body>
</html>

