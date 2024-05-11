@extends ('layouts.main')

@push('header')
    <title>Update Informasi Antrian</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-3">
        <div class="h5">Update Data Antrian</div>
        <a href="/antrian" class="btn btn-secondary btn-sm">Back</a>
    </div>

    <div class = "card">
    <div class = "card-body">
    <form action="/antrian/{{$antrian->id}}" method="POST">
        @method('PUT')
            @csrf

            <label for="no_antrian" class="form-label mt-4">No Antrian</label>
            <input type="text" name="no_antrian" class="form-control" placeholder="No Antrian" value="{{$antrian->no_antrian ?? $nextNoAntrian}}"><br>
            <div class="text-danger">
                @error('no_antrian')
                {{$message}}
                @enderror
            </div>

            <label for="" class="form-label mt-4">Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" placeholder="Nama Pasien" value="{{$antrian->nama_pasien}}" ><br>
            <div class="text-danger">
                @error('nama_pasien')
                {{$message}}
                @enderror
            </div>

            <label for="" class="form-label mt-4">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select">
                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                <option value="Pria" @if ($antrian->jenis_kelamin == "Pria") selected @endif> Pria</option>
                <option value="Wanita" @if ($antrian->jenis_kelamin == "Wanita") selected @endif> Wanita</option>
            </select>
            <div class="text-danger">
                @error('jenis_kelamin')
                {{$message}}
                @enderror
            </div>

            <label for="no_telp" class="form-label mt-4">Nomor Telepon</label>
            <input type="text" name ="no_telp" class="form-control" value="{{$antrian->no_telp}}">
            <div class="text-danger">
                @error('jenis_kelamin')
                {{$message}}
                @enderror
            </div>

            <label for="" class="form-label mt-4">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" value="{{$antrian->alamat}}">
            <div class="text-danger">
                @error('alamat')
                {{$message}}
                @enderror
            </div>

            <label for="tanggal_reservasi" class="form-label mt-4">Tanggal Reservasi</label>
            <input type="date" name="tanggal_reservasi" class="form-control" value="{{ old('tanggal') ?? date('Y-m-d') }}">
                    <span class="text-danger">{{ $errors->first('tanggal_reservasi') }}</span>
            <div class="text-danger">
                @error('tanggal_reservasi')
                {{$message}}
                @enderror
            </div>

            <label for="" class="form-label mt-4">Poli</label>
            <select name="poli" class="form-select">
                <option value="" disabled selected>Pilih Layanan Poli</option>
                <option value="Poli Umum" @if ($antrian->poli=="Poli Umum") selected @endif>Poli Umum</option>
                <option value="Poli Gigi" @if ($antrian->poli=="Poli Gigi") selected @endif>Poli Gigi</option>
                <option value="Poli Mata" @if ($antrian->poli=="Poli Mata") selected @endif>Poli Mata</option>
            </select>
            <div class="text-danger">
                @error('poli')
                {{$message}}
                @enderror
            </div>

            <label for="" class="form-label mt-4">Keluhan Pasien</label>
                <textarea name="keluhan" class="form-control" rows="5">{{ old('keluhan', $antrian->keluhan) }}</textarea>
                <span class="text-danger">{{ $errors->first('keluhan') }}</span>
            <div class="text-danger">
                @error('keluhan')
                {{$message}}
                @enderror
            </div>

            <label for="" class="form-label mt-4">Status Pelayanan</label>
            <select name="status_pelayanan" class="form-select">
                <option value="" disabled selected>Pilih Status Pelayanan</option>
                <option value="Menunggu">Menunggu</option>
                <option value="Sedang Menerima Layanan">Sedang Menerima Layanan</option>
                <option value="Selesai">Selesai</option>
            </select>
            <div class="text-danger">
                @error('status_pelayanan')
                {{$message}}
                @enderror
            </div>

            <div class="col-12 text-center mt-4 ">
            <button class="btn btn-secondary" type="submit">Update</button>
            </div>
        </form>
    </div>



    </div>
</div>
@endsection
