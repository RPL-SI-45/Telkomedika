<!DOCTYPE html>
<html lang="en">
<head>
<nav class="navbar" style="background-color: #B6252A;"data-bs-theme="dark">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('gambar/logo.png')}}" width="50px" style="position: absolute; left: 70px; transform: translateY(-50%);">
        <div class="h3 text-white" style="position: absolute; left: 130px; transform: translateY(-50%);">Telkomedika</div></div>
    </a>
    <nav style="color: white;" data-bs-theme="dark">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('gambar/profile.png')}}" width="30px" style="position: absolute; right: 70px; transform: translateY(-5%);">
        <div class="h6 text-white" style="position: auto; right: 130px; transform: translateX(-25%); translateY(50%);">Pasien</div>
    </a>
  </nav>
</nav>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Informasi Poli</title>
</head>
<body>
    @yield('content')
</body>


