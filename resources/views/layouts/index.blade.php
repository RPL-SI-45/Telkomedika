@extends ('layouts.main')

@push('header')
    <title>Informasi Antrian</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-3">
        <div class="h5">Daftar Antrian</div>
        <a href="{{route("antrian.create")}}" class="btn btn-secondary btn-sm">Tambah Antrian</a>
    </div>

    <table class="table table-striped">
    <thead class="table-danger">
        <tr class="text-center">
            <th>No Antrian</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Poli</th>
            <th>Status Pelayanan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($antrian as $w)
        <tr class="text-center" valign='middle'>
            <td>{{ $w->no_antrian }}</td>
            <td>{{ $w->nama_pasien }}</td>
            <td>{{ $w->jenis_kelamin }}</td>
            <td>{{ $w->poli }}</td>
            <td>{{ $w->status_pelayanan }}</td>
            <td>
            <div class="btn-group" role="group" aria-label="Basic example">

            <a class="btn btn-primary btn-sm" href="/antrian/{{$w->id}}/show">Show</a>

            <a class="btn btn-warning btn-sm" href="/antrian/{{$w->id}}/edit">Edit</a>

            <form action="/antrian/{{$w->id}}" method="POST">
        @csrf
        @method('delete')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
</div>


        </td>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>

@endsection
