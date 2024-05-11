@extends ('layouts.main')

@push('header')
    <title>Informasi Antrian</title>
@endpush

@section('main-section')

<div class="d-sm-flex align-items-center justify-content-between mb-4"></div>
</br>

<div class="container">
    <div class="row mb-4">
        <div class="col-xl-2 col-md-4" style="margin-left: 10px;">
            <div class="card border-left-warning shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                        <h6 class="font-weight-bold mb-0 text-center">JUMLAH ANTRIAN : {{ session('antrian_count') ?? $antrian->where('status_pelayanan', '!=', 'Selesai')->count() }}</h6>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4" style="margin-left: 1180px;">
        <a href='/reservasi/create' class="btn btn-secondary btn-sm" style="white-space: nowrap;">Buat Reservasi</a>
        </div>

    </div>
</div>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3"; style="background-color: #B6252A";>
                    <h6 class="m-0 font-weight-bold text-white";>Daftar Antrian</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr class="text-center">
                <th>No Antrian</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Poli</th>
                <th>Keluhan</th>
                <th>Tanggal Reservasi</th>
                <th>Status Pelayanan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($antrian as $w)
            <tr class="text-center">
                <td>{{ $w->no_antrian }}</td>
                <td>{{ $w->nama_pasien }}</td>
                <td>{{ $w->jenis_kelamin }}</td>
                <td>{{ $w->no_telp }}</td>
                <td>{{ $w->alamat }}</td>
                <td>{{ $w->poli }}</td>
                <td>{{ $w->keluhan }}</td>
                <td>{{ $w->tanggal_reservasi }}</td>
                <td>{{ $w->status_pelayanan }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-primary btn-sm" href="/antrian/{{$w->id}}/show">Show</a>
                        <a class="btn btn-warning btn-sm" href="/antrian/{{$w->id}}/edit">Edit</a>
                        <form action="/antrian/{{$w->id}}" method="POST">
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


</div>
@endsection
