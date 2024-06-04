@extends ('layouts.elemenadmin')


@section('main-section')
<div class="content flex-1 p-20">
<div class="container mt-5">
    <div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Informasi Daftar Rumah Sakit Mitra Klinik Telkomedika</div>
</br>
    <div class = "card">
    <div class = "card-body">
        <form action="/rumahsakit/store" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Rumah Sakit</label>
            <input type="text" name="NamaRumahsakit" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" name="Alamat" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                <input type="text" name="Notelepon" class="form-control" id="exampleFormControlInput1" >
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
                <input type="text" name="Lokasi" class="form-control" id="exampleFormControlInput1" >
            </div>

            <form action="/rumahsakit/store" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="image">Upload Gambar</label>
                <input type="file" name="Gambar" class="form-control-file" required>
            </div>
            <button type="submit" name="submit" class="btn btn-danger btn-bg" style="transform: translateX(600%); background-color: #B6252A;">Submit</button>

            </form>
@endsection
