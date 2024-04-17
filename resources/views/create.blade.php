@extends("layouts.main")

@section('main-section')
    <div class="container">
        <div class="h1 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Buat Reservasi Online</div>

        <form action="/reservasi/store" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <label for="nama_pasien" class="form-label">Nama Pasien</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Pasien" aria-label="Nama Pasien" style="border-color: red;width: 300px;margin-bottom: 20px;">
                </div>
                <div class="col">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nomor telepon" aria-label="Nomor Telepon" style="border-color: red;width: 300px;">
                </div>
                <div class="col">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" style="border-color: red;width: 300px;">
                        <option value="Poli A">Laki-Laki</option>
                        <option value="Poli B">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="tanggal_reservasi" class="form-label">Tanggal Reservasi</label>
                    <input type="date" name="tanggal_reservasi" class="form-control" value="{{ old('tanggal') ?? date('Y-m-d') }}"style="border-color: red;width: 300px;margin-bottom: 30px;" >
                    <span class="text-danger">{{ $errors->first('tanggal_reservasi') }}</span>
                </div>
                <div class="col">
                    <label for="poli" class="form-label">Poli</label>
                    <select name="poli" id="poli" class="form-select" style="border-color: red;width: 300px;">
                        <option value="Poli A">Poli Umum</option>
                        <option value="Poli B">Poli Gigi</option>
                        <option value="Poli C">Poli Mata</option>
                    </select>
                </div>
                <div class="col">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat" aria-label="Alamat" style="border-color: red;width: 300px;">
                </div>

            <div class="form-group mb-4">
                <label for="keluhan">Keluhan Pasien</label>
                <textarea name="keluhan" class="form-control" rows="5" style="border-color: red;width: 1180px;margin-bottom: 20px;">{{ old('keluhan') }} </textarea>
                <span class="text-danger">{{ $errors->first('keluhan') }}</span>
            </div>

            <div class="text-center">
                <input type="submit" name="submit" class="btn btn-danger btn-bg" style="background-color: #B6252A" value="Buat Reservasi">
            </div>
        </form>
    </div>
@endsection