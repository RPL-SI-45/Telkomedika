@extends ('layouts.elemenadmin')


@section('main-section')
<div class="content flex-1 p-20">
<div class="container mt-5">
    <div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Resume Layanan</div>
        <div class="d-flex justify-content-between align-items-center my-3">
            <a dusk="buatresume" class="btn btn-secondary" href="/resumelayanan/create">Input Resume Layanan</a>
        </div>
        <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3"; style="background-color: #B6252A";>
                <h6 class="m-0 font-weight-bold text-white">Daftar Resume Layanan</h6>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Nama Resume</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ResumeLayanan as $b)
            <tr class="text-center">
                <td>{{$b->id}}</td>
                <td>{{$b->nama_resume}}</td>
                <td>{{$b->tanggal_dibuat}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a dusk ="view" class="btn btn-info btn-sm" href="/resumelayanan/viewresume/{{$b->id}}">View</a>
                        <a dusk ="edit" class="btn btn-warning btn-sm" href="/resumelayanan/{{$b->id}}/edit">Edit</a>
                        <form action="/resumelayanan/{{$b->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input dusk ="delete" type="submit" class="btn btn-danger btn-sm"value="Delete">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
