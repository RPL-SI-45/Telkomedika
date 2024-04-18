<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div class="container">


<table  class="table table-striped table-hover table-bordered table-white table-striped" border="2">
    <tr>
        <th scope="col">NOMOR</th>
        <th scope="col">NAMA DOKTER</th>
        <th scope="col">NAMA POLI</th>
        <th scope="col">SENIN</th>
        <th scope="col">SELASA</th>
        <th scope="col">RABU</th>
        <th scope="col">KAMIS</th>
        <th scope="col">JUMAT</th>
        <th scope="col">SABTU</th>
        <th scope="col">STATUS KEHADIRAN</th>
        <td></td>
    </tr>
    @foreach($informasidokter as $informasidokter)
    <tr>
        <td>{{$informasidokter->id}}</td>
        <td>{{$informasidokter->Nama_Dokter}}</td>       
        <td>{{$informasidokter->Nama_Poli}}</td>
        <td>{{$informasidokter->Senin}}</td>
        <td>{{$informasidokter->Selasa}}</td>
        <td>{{$informasidokter->Rabu}}</td>
        <td>{{$informasidokter->Kamis}}</td>
        <td>{{$informasidokter->Jumat}}</td>
        <td>{{$informasidokter->Sabtu}}</td>
        <td>{{$informasidokter->Status_Kehadiran}}</td>

        <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a class="btn btn-warning" href="/informasidokter/{{$informasidokter->id}}/edit">Edit</a>
            <form action="/informasidokter/{{$informasidokter->id}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="delete">
            </form>
            </div>
            
        </td>
    </tr>

    @endforeach
</table>
<a type="button" class="btn btn-success" href="/informasidokter/create">Tambah Informasi Dokter</a>
</div>