@extends('layouts.reservasimain')

@section('main-section')
<div class="container">
    <div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Informasi Dokter Klinik Telkomedika</div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3"; style="background-color: #B6252A";>
                    <h6 class="m-0 font-weight-bold text-white">Daftar Informasi Dokter Telkomedika</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Nama Dokter</th>
                                    <th scope="col">Nama Poli</th>
                                    <th scope="col">Senin</th>
                                    <th scope="col">Selasa</th>
                                    <th scope="col">Rabu</th>
                                    <th scope="col">Kamis</th>
                                    <th scope="col">Jumat</th>
                                    <th scope="col">Sabtu</th>
                                    <th scope="col">Status Kehadiran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($informasidokter as $dokter)
                                <tr class="text-center">
                                    <td>{{ $dokter->id }}</td>
                                    <td>{{ $dokter->Nama_Dokter }}</td>
                                    <td>{{ $dokter->Nama_Poli }}</td>
                                    <td>{{ $dokter->Senin }}</td>
                                    <td>{{ $dokter->Selasa }}</td>
                                    <td>{{ $dokter->Rabu }}</td>
                                    <td>{{ $dokter->Kamis }}</td>
                                    <td>{{ $dokter->Jumat }}</td>
                                    <td>{{ $dokter->Sabtu }}</td>
                                    <td>{{ $dokter->Status_Kehadiran }}</td>
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
