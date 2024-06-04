@extends('layouts.elemenadmin')

@section('main-section')
<div class="content flex-1 p-20">
    <div class="container mt-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="background-color: #B6252A;">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <div class="d-flex">
                            <form action="/rekammedis/search" class="form-inline" method="get">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                                <button class="btn btn-outline-secondary" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Nama Pasien</th>
                                <th>Tanggal Reservasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rekammedis as $w)
                                <tr class="text-center">
                                    <td>{{ $w->nama_pasien }}</td>
                                    <td>{{ $w->tanggal_reservasi }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class="btn btn-primary btn-sm" href="/rekammedis/{{$w->id}}/view">View</a>
                                            <form action="/rekammedis/{{$w->id}}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
