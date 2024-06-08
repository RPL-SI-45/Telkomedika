@extends('layouts.elemen')

@section('main-section')
<div class="content flex-1 p-20">
    <div class="container mt-5">
            <div class="h2 text-center mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">
                Informasi Rumah Sakit Mitra Klinik Telkomedika
            </div>
                </br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow mb-4">
                    <div class="card-header" style="background-color: #B6252A; padding: 20px;">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="m-0 font-weight-bold text-white">Daftar Rumah Sakit Mitra</h5>
                        </div>
                    </div>
                        <div class="card-body mb-4">
                            <div class="row">
                                @foreach ($rumahsakit as $rs)
                                    <div class="col-md-4 mb-4">
                                        <div class="card shadow-sm" style="background-color:#C0C0C0; height: 100%; border: 0px solid black;">
                                            <div class="card-body text-center">
                                                <img src="{{ asset('storage/' . $rs->Gambar) }}" alt="Hospital Picture" width="120px" height="120px" style="position: absolute; left: 50%; transform: translateX(-50%);">
                                                <h5 class="card-title" style="margin-top: 130px;">{{ $rs->NamaRumahsakit }}</h5>
                                                <p class="card-text">{{ $rs->Alamat }}</p>
                                                <p class="card-text">{{ $rs->Notelepon }}</p>
                                                <a href="{{ $rs->Lokasi }}" target="_blank" class="btn btn-danger btn-bg" style="background-color: #B6252A" role="button" aria-disabled="true">Lihat Lokasi</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
