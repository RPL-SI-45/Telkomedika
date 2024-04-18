<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Informasi Dokter</title>
</head>
<body>
<h1>Tambah Informasi Dokter</h1>

<form action="/informasidokter/store" method="POST">
    @csrf
    
    <input type="text" name="Nama_Dokter" placeholder="Nama Dokter"><br>
    <input type="text" name="Nama_Poli" placeholder="Nama Poli"><br> 
    <input type="text" name="Senin" placeholder="Senin"><br> 
    <input type="text" name="Selasa" placeholder="Selasa"><br>
    <input type="text" name="Rabu" placeholder="Rabu"><br>
    <input type="text" name="Kamis" placeholder="Kamis"><br>
    <input type="text" name="Jumat" placeholder="Jumat"><br>
    <input type="text" name="Sabtu" placeholder="Sabtu"><br>
    <input type="text" name="Status_Kehadiran" placeholder="Status Kehadiran"><br>

    <input class="btn btn-primary"type="SUBMIT" name="SUBMIT" value="SAVE">

</form>
