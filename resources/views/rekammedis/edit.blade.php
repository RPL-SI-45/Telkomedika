@extends("layouts.reservasimain")

@section('main-section')
    <div class="container">
        <div class="h1 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Informasi Rekam Medis Pasien</div>
</br>
        <form role="form" action="/rekammedis/{{$rekammedis->id}}/perform" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3"; style= "transform: translateX(5%)";>
                <div class="col">
                    <label for="nama_pasien" class="form-label">Nama Pasien</label>
                    <input type="text" name ="nama_pasien" class="form-control" placeholder="Masukkan Nama Pasien" aria-label="Nama Pasien" value="{{$rekammedis->nama_pasien}}" style="border-color: red;width: 300px;margin-bottom: 20px;"readonly>
                </div>
                
                <div class="col">
                    <label for="no_telp" class="form-label">Nomor Telepon</label>
                    <input type="text" name ="no_telp" class="form-control" placeholder="Masukkan Nomor telepon" aria-label="Nomor Telepon" value="{{$rekammedis->no_telp}}"style="border-color: red;width: 300px;"readonly>
                </div>

                <div class="col">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="{{$rekammedis->jenis_kelamin}}"style="border-color: red;width: 300px;" readonly>
                </div>
            </div>

            <div class="row mb-3"; style= "transform: translateX(5%)";>
            <div class="col">
            <label for="tanggal_reservasi" class="form-label">Tanggal Reservasi</label>
            <input type="date" name="tanggal_reservasi" class="form-control" value="{{ $rekammedis->tanggal_reservasi }}" style="border-color: red;width: 300px;margin-bottom: 30px;" readonly>
                    <span class="text-danger">{{ $errors->first('tanggal_reservasi') }}</span>
            <div class="text-danger">
                @error('tanggal_reservasi')
                {{$message}}
                @enderror
            </div>
                </div>
                
                <div class="col">
                    <label for="poli" class="form-label">Poli</label>
                    <input type= "text" name="poli" id="poli" class="form-control" value="{{$rekammedis->poli}}" style="border-color: red;width: 300px;" readonly>
                </div>

                <div class="col">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat" aria-label="Alamat" value="{{$rekammedis->alamat}}" style="border-color: red;width: 300px;"readonly>
                </div>

            <div class="form-group mb-4">
                <label for="keluhan">Keluhan Pasien</label>
                <textarea name="keluhan" class="form-control" rows="5" style="border-color: red;width: 1180px;margin-bottom: 20px;"readonly>{{ old('keluhan', $rekammedis->keluhan) }}</textarea>
                <span class="text-danger">{{ $errors->first('keluhan') }}</span>
            </div>

            <div class="col">
                <label for="dokter" class="form-label">Dokter Pemeriksa</label>
                <input type="text" name="dokter" class="form-control" id="dokter" placeholder="Masukkan Nama DOkter" aria-label="Dokter" value="{{$rekammedis->dokter}}" style="border-color: red;width: 1180px;margin-bottom: 20px;">
            </div>
            
            <div class="form-group mb-4">
                <label for="fisik">Hasil Pemeriksaan Fisik</label>
                <textarea name="fisik" class="form-control" rows="5" style="border-color: red;width: 1180px;margin-bottom: 20px;">{{$rekammedis->fisik}} </textarea>
                <span class="text-danger">{{ $errors->first('fisik') }}</span>
            </div>

            <div class="col">
                <label for="diagnosis" class="form-label">Diagnosis</label>
                <input type="text" name="diagnosis" class="form-control" id="diagnosis" placeholder="Masukkan Hasil Diagnosis" aria-label="diagnosis" value="{{$rekammedis->diagnosis}}" style="border-color: red;width: 1180px;margin-bottom: 20px;">
            </div>

            <div class="text-center">
            <button type="submit" name="submit" class="btn btn-danger btn-bg" style="transform: translateX(-30%); background-color: #B6252A;">Simpan Perubahan</button>

            </div>
        </form>
    </div>
@endsection


