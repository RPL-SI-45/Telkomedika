@extends('layoutrumahsakit.rs')

@section('main-section')
    <div class="container">
        <br>
        <div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">
            Informasi Rumah Sakit Mitra Klinik Telkomedika
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3" style="background-color: #B6252A;">
                        <div class="d-flex justify-content-between align-items-center my-3">
                        <h5 class="m-0 font-weight-bold text-white">Daftar Rumah Sakit Mitra</h5>
                        <div></div>
                            <a class="btn btn-secondary" href="/rumahsakit/createrumahsakit" >Tambah Data Rumah Sakit Mitra</a>
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
                                            <a link href="{{ $rs->Lokasi }}" target="_blank" class="btn btn-primary" role="button" aria-disabled="true">Lihat Lokasi</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example" style="padding: 10px;">
                                            <a class="btn btn-warning btn-sm" href="/rumahsakit/{{$rs->id}}/edit">Edit</a>
                                            <form action="/rumahsakit/{{$rs->id}}" method="post" style="display: inline;">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                            </form>
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
@endsection
