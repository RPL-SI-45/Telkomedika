@extends('layoutrumahsakit.rs')


@section('main-section')
    <div class = "container"> </br>
    <div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Informasi Layanan Poli Klinik Telkomedika</div>
        <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3"; style="background-color: #B6252A";>
                    <h6 class="m-0 font-weight-bold text-white">Daftar Layanan Rumah Sakit Mitra</h6>
                </div>
                <br>
                <div class="row">
        @foreach ($rumahsakit as $rs)
        <div class="col-md-4">
            <div class="card mb-4" style="background-color: #B6252A; width: 100%; height: 220px; border: 0px solid black;">
                <div class="card-body text-center">
                    <img src="{{ $rs-> Gambar}}" alt="Hospital Picture" width="120px" height="120px" style="position: absolute; left: 20%; transform: translateX(-50%);">
                    <h5 class="card-title">{{ $rs->NamaRumahsakit }}</h5>
                    <p class="card-text">{{ $rs->Alamat }}</p>
                    <p class="card-text">{{ $rs->Notelepon }}</p>
                    <p><a href="{{ $rs->Lokasi }}" target="_blank">Lihat Lokasi</a></p>
                </div>
            </div>
        </div>
    </div>
        @endforeach
@endsection
