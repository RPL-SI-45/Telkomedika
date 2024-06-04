@extends('layouts.elemen')


@section('main-section')

<div class="content flex-1 p-20">
<div class="container mt-5">
<div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Informasi Layanan Poli Klinik Telkomedika</div>
</br>
    <div class = "container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3"; style="background-color: #B6252A";>
                    <h6 class="m-0 font-weight-bold text-white">Daftar Layanan Poli</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr class="text-center">
                <th>ID</th>
                <th>Nama Poli</th>
                <th>Deskripsi Poli</th>
                <th>Nama Dokter</th>
                <th>Jadwal Dokter</th>
            </tr>
    </thead>
    <tbody>
            @foreach($poli as $b)
            <tr class="text-center">
                <td>{{$b->id}}</td>
                <td>{{$b->Nama_Poli}}</td>
                <td>{{$b->Deskripsi_Poli}}</td>
                <td>{{$b->Nama_Dokter}}</td>
                <td>{{$b->Jadwal_dokter}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
