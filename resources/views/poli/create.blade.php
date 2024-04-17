
@extends('layout.master')


@section('content')
    <div class="container">
        <h1>Informasi Poli</h1>

        <form action="/poli/store" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Poli</label>
                <input type="text" name="Nama_Poli" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Deskripsi Poli</label>
                <input type="text" name="Deskripsi_Poli" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Dokter</label>
                <input type="text" name="Nama_Dokter" class="form-control" id="exampleFormControlInput1" >
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jadwal Dokter</label>
                <input type="text" name="Jadwal_Dokter" class="form-control" id="exampleFormControlInput1" >
            </div>
            @csrf
   
        <input type="submit" name="submit" class="btn btn-secondary" value="save" >
        </form>
    </div>
@endsection
