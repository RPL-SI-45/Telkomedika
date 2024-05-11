@extends("layouts.reservasimain")


@section('main-section')
    <div class="container">
    <div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Informasi Layanan Poli Klinik Telkomedika</div>

        <div class = "card">
        <div class = "card-body">
        <form action="/poli/{{$poli->id}}" method="POST">
        @method('put')
        @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Poli</label>
                    <select name="Nama_Poli" id="Nama_Poli" class="form-select">
                    <option value="" disabled selected>Pilih Poli</option>
                        <option value="Poli Umum">Poli Umum</option>
                        <option value="Poli Gigi">Poli Gigi</option>
                        <option value="Poli Mata">Poli Mata</option>
            </select>
        </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Deskripsi Poli</label>
                    <input type="text" name="Deskripsi_Poli" class="form-control" id="exampleFormControlInput1" value="{{$poli->Deskripsi_Poli}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Dokter</label>
                    <input type="text" name="Nama_Dokter" class="form-control" id="exampleFormControlInput1" value="{{$poli->Nama_Dokter}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jadwal Dokter</label>
                    <input type="text" name="Jadwal_Dokter" class="form-control" id="exampleFormControlInput1" value="{{$poli->Jadwal_Dokter}}">
                </div>

                <div class="col-12 text-center mt-4 ">
                <input type="submit" name="submit" class="btn btn-secondary" value="Update">
            </div>
        </form>
    </div>
@endsection
