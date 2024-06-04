@extends ('layouts.elemen')

@section('main-section')
<div class="content flex-1 p-10">
<div class="container mt-5">
    <div class="h1 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Informasi Rekam Medis Pasien</div>

    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3" style="background-color: #B6252A;">
                        <h6 class="m-0 font-weight-bold text-white">Identitas Pasien</h6>
                    </div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="nama_pasien" class="form-label">Nama Pasien</label>
                                <input type="text" name="nama_pasien" class="form-control" value="{{$rekammedis->nama_pasien}}" readonly>
                            </div>
                            <div class="col">
                                <label for="no_telp" class="form-label">Nomor Telepon</label>
                                <input type="text" name="no_telp" class="form-control" value="{{$rekammedis->no_telp}}" readonly>
                            </div>
                            <div class="col">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" class="form-control" value="{{$rekammedis->jenis_kelamin}}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="tanggal_reservasi" class="form-label">Tanggal Reservasi</label>
                                <input type="date" name="tanggal_reservasi" class="form-control" value="{{$rekammedis->tanggal_reservasi}}" readonly>
                                <span class="text-danger">{{ $errors->first('tanggal_reservasi') }}</span>
                                @error('tanggal_reservasi')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="poli" class="form-label">Poli</label>
                                <input type="text" name="poli" class="form-control" value="{{$rekammedis->poli}}" readonly>
                            </div>
                            <div class="col">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{$rekammedis->alamat}}" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="keluhan" class="form-label">Keluhan Pasien</label>
                            <textarea name="keluhan" class="form-control" rows="5" readonly>{{ old('keluhan', $rekammedis->keluhan) }}</textarea>
                            <span class="text-danger">{{ $errors->first('keluhan') }}</span>
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-header py-3" style="background-color: #B6252A;">
                        <h6 class="m-0 font-weight-bold text-white">Hasil Pemeriksaan</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="dokter" class="form-label">Dokter Pemeriksa</label>
                            <input type="text" name="dokter" class="form-control" value="{{$rekammedis->dokter}}" readonly>
                        </div>
                        <div class="form-group mb-4">
                            <label for="fisik" class="form-label">Hasil Pemeriksaan Fisik</label>
                            <textarea name="fisik" class="form-control" rows="5" readonly>{{$rekammedis->fisik}}</textarea>
                            <span class="text-danger">{{ $errors->first('fisik') }}</span>
                        </div>
                        <div class="mb-3">
                            <label for="diagnosis" class="form-label">Diagnosis</label>
                            <input type="text" name="diagnosis" class="form-control" value="{{$rekammedis->diagnosis}}" readonly>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <form action="/rekammedis/{{$rekammedis->id}}/view/edit" method="get">
                    <input type="submit" class="btn btn-primary" style="background-color: #B6252A" value="Tambah Keterangan">                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
