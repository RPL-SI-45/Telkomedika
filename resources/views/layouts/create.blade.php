@extends ('layouts.main')

@push('header')
    <title>Informasi Antrian</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-3">
        <div class="h5">Tambah Data Antrian</div>
        <a href="/antrian" class="btn btn-secondary btn-sm">Back</a>
    </div>

    <div class = "card">
    <div class = "card-body">
        <form action="{{route("antrian.create")}}" method="POST">
            @csrf

            <label for="" class="form-label mt-4">No Antrian</label>
            <input type="text" name="no_antrian" class="form-control">
            <div class="text-danger">
                @error('no_antrian')
                {{$message}}
                @enderror
            </div>

            <label for="" class="form-label mt-4">Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control">
            <div class="text-danger">
                @error('nama_pasien')
                {{$message}}
                @enderror
            </div>

            <label for="" class="form-label mt-4">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select">
                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
            <div class="text-danger">
                @error('jenis_kelamin')
                {{$message}}
                @enderror
            </div>

            <label for="" class="form-label mt-4">Poli</label>
            <select name="poli" class="form-select">
                <option value=""disabled selected>Pilih Layanan Poli</option>
                <option value="Poli Umum">Poli Umum</option>
                <option value="Poli Gigi">Poli Gigi</option>
                <option value="Poli Mata">Poli Mata</option>
            </select>
            <div class="text-danger">
                @error('poli')
                {{$message}}
                @enderror
            </div>

            <label for="" class="form-label mt-4">Tanggal Reservasi</label>
                    <input type="date" name="tanggal_reservasi" class="form-control" value="{{ old('tanggal') ?? date('d-m-Y') }}">
                    <span class="text-danger">{{ $errors->first('tanggal_reservasi') }}</span>

            <label for="" class="form-label mt-4">Status Pelayanan</label>
            <select name="status_pelayanan" class="form-select">
                <option value=""disabled selected>Pilih Status Pelayanan</option>
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
            <button class="btn btn-secondary" type="submit">Save</button>
            </div>

        </form>
    </div>



    </div>
</div>
@endsection
