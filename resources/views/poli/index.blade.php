@extends ('layouts.elemenadmin')


@section('main-section')
<div class="content flex-1 p-20">
<div class="container mt-5">
    <div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Informasi Layanan Poli Klinik Telkomedika</div>
        <div class="d-flex justify-content-between align-items-center my-3">
            <a class="btn btn-secondary" href="/poli/create">Tambah Data Poli</a>
        </div>
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
                <th>Aksi</th>
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
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-warning btn-sm" href="/poli/{{$b->id}}/edit">Edit</a>
                        <form action="/poli/{{$b->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger btn-sm"value="Delete">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
