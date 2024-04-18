<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1>Edit Informasi Dokter</h1>

<form action="/informasidokter/{{$informasidokter->id}}" method="POST">
    @method('put')
    @csrf
    
    <input type="text" name="Nama_Dokter" placeholder="Nama Dokter" value="{{$informasidokter->Nama_Dokter}}"><br>
    <input type="text" name="Nama_Poli" placeholder="Nama Poli" value="{{$informasidokter->Nama_Poli}}"><br>
    <input type="text" name="Senin" placeholder="Senin" value="{{$informasidokter->Senin}}"><br>
    <input type="text" name="Selasa" placeholder="Selasa" value="{{$informasidokter->Selasa}}"><br>
    <input type="text" name="Rabu" placeholder="Rabu" value="{{$informasidokter->Rabu}}"><br>
    <input type="text" name="Kamis" placeholder="Kamis" value="{{$informasidokter->Kamis}}"><br>
    <input type="text" name="Jumat" placeholder="Jumat" value="{{$informasidokter->Jumat}}"><br>
    <input type="text" name="Sabtu" placeholder="Sabtu" value="{{$informasidokter->Sabtu}}"><br>
    <input type="text" name="Status_Kehadiran" placeholder="Status Kehadiran" value="{{$informasidokter->Status_Kehadiran}}"><br>

    <input class="btn btn-primary"type="SUBMIT" name="SUBMIT" value="SAVE">

</form>
