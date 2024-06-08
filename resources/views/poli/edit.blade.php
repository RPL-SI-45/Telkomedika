@extends ('layouts.elemenadmin')


@section('main-section')
<div class="content flex-1 p-20">
<div class="container mt-5">
    <div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Informasi Layanan Poli Klinik Telkomedika</div>
    </br>
        <div class = "card">
        <div class = "card-body">
        <form action="/poli/{{$poli->id}}" method="POST">
        @method('put')
        @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Poli</label>
                <select name="Nama_Poli" class="form-select">
                    <option value="" disabled selected>Pilih Layanan Poli</option>
                    <option value="Poli Umum" @if ($poli->Nama_Poli=="Poli Umum") selected @endif>Poli Umum</option>
                    <option value="Poli Gigi" @if ($poli->Nama_Poli=="Poli Gigi") selected @endif>Poli Gigi</option>
                    <option value="Poli Mata" @if ($poli->Nama_Poli=="Poli Mata") selected @endif>Poli Mata</option>
                </select>
                    <div class="text-danger">
                        @error('Nama_Poli')
                        {{$message}}
                        @enderror
                    </div>
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
                    <input type="text" name="Jadwal_Dokter" class="form-control" id="exampleFormControlInput1" value="{{ old('Jadwal_Dokter', $poli->Jadwal_Dokter) }}">
                    <div class="text-danger">
                        @error('Jadwal_Dokter')
                        {{$message}}
                        @enderror
                    </div>
                </div>



                <div class="col-12 text-center mt-4 ">
                <input type="submit" name="submit" class="btn btn-secondary" value="Update">
            </div>
        </form>
    </div>
@endsection
