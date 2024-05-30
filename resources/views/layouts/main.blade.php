<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Klinik Pratama Telkomedika </title>
    @stack('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="bg" style="height: 60px; background-color: #B6252A"></div>
    <div class="h3 text-white" style="position: absolute; left: 130px; transform: translateY(-150%);">Telkomedika</div></div>
    <img src="{{ asset('logo/Telkomedika.png')}}" width="50px" style="position: absolute; left: 70px; transform: translateY(-115%);">
    @yield('main-section')
</body>
</html>

