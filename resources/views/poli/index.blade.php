@extends('layout.master')




@section('content')
    <div class = "container">
        <a class="btn btn-primary" href="/poli/create">Add Data</a>
        <table class="table table-white table-striped">
            <tr>
                <th>ID</th>
                <th>Nama Poli</th>
                <th>Deskripsi Poli</th>
                <th>Nama Dokter</th>
                <th>Jadwal Dokter</th>
                <th>Aksi</th>
            </tr>
            @foreach($poli as $b)
            <tr>
                <td>{{$b->id}}</td>
                <td>{{$b->Nama_Poli}}</td>
                <td>{{$b->Deskripsi_Poli}}</td>
                <td>{{$b->Nama_Dokter}}</td>
                <td>{{$b->Jadwal_Dokter}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-warning" href="/poli/{{$b->id}}/edit">Edit</a>
                        <form action="/poli/{{$b->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger"value="Delete">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
