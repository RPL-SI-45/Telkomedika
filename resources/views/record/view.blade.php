@extends ('layouts.elemen')

@push('header')
    <title>Riwayat Berobat Pasien</title>
@endpush


@section('main-section')
<div class="d-sm-flex align-items-center justify-content-between mb-4"></div>
</br>

<div class="content flex-1 p-10">
<div class="container mt-5">
        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2 class="text-center mt-3 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Riwayat Berobat Pasien</h2>
                    </div>
                </div>
            </div>

    <div class="row mb-4">
        <div class="d-flex justify-content-between align-items-center mb-6">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3"; style="background-color: #B6252A";>
                    <h6 class="m-0 font-weight-bold text-white">Riwayat Berobat</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>Nama Pasien</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Reservasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rekammedis as $w)
                                <tr class="text-center">
                                    <td>{{ $w->nama_pasien }}</td>
                                    <td>{{ $w->jenis_kelamin }}</td>
                                    <td>{{ $w->tanggal_reservasi }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class="btn btn-primary btn-sm" href="/medicalrecords/{{$w->id}}/view">View</a>
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
