@extends('layout.master')

@push('header')
    <title>Informasi Poli</title>

@section('content')
<div class="container mt-5">
    <div class = "container">
        <table class="table table-white table-striped">
            <tr>
                <th>ID</th>
                <th>Nama Poli</th>
                <th>Deskripsi Poli</th>
                <th>Nama Dokter</th>
                <th>Jadwal Dokter</th>
            </tr>
            @foreach($poli as $b)
            <tr>
                <td>{{$b->id}}</td>
                <td>{{$b->Nama_Poli}}</td>
                <td>{{$b->Deskripsi_Poli}}</td>
                <td>{{$b->Nama_Dokter}}</td>
                <td>{{$b->Jadwal_Dokter}}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
