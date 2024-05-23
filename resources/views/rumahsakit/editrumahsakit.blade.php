@extends("layoutrumahsakit.rs")

@section('main-section')
    <div class="container">
        <div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Informasi Layanan Rumah Sakit Mitra Klinik Telkomedika</div>
        <div class = "card">
            <div class = "card-body">
                <form action="/rumahsakit/{{$rumahsakit->id}}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Rumahsakit</label>
                        <input type="text" name="NamaRumahsakit" class="form-control" id="exampleFormControlInput1" value="{{$rumahsakit->NamaRumahsakit}}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        <input type="text" name="Alamat" class="form-control" id="exampleFormControlInput1" value="{{$rumahsakit->Alamat}}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Notelepon</label>
                        <input type="text" name="Notelepon" class="form-control" id="exampleFormControlInput1" value="{{$rumahsakit->Notelepon}}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
                        <input type="text" name="Lokasi" class="form-control" id="exampleFormControlInput1" value="{{$rumahsakit->Lokasi}}" >
                    </div>

                <form action="/rumahsakit/store" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="image">Upload Gambar</label>
                    <input type="file" name="Gambar" class="form-control-file" required>
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </form>
    </div>
@endsection
