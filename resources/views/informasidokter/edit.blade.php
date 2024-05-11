@extends('layouts.reservasimain')

@section('main-section')
<div class="container">
<div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Informasi Dokter Klinik Telkomedika</div>


<div class = "card">
    <div class = "card-body">
    <form action="/informasidokter/{{ $informasidokter->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="Nama_Dokter" class="form-label">Nama Dokter</label>
            <input type="text" name="Nama_Dokter" class="form-control" id="Nama_Dokter" placeholder="Nama Dokter" value="{{ $informasidokter->Nama_Dokter }}">
        </div>
        <div class="mb-3">
            <label for="Nama_Poli" class="form-label">Nama Poli</label>
            <select name="Nama_Poli" id="Nama_Poli" class="form-select">
            <option value="" disabled selected>Pilih Poli</option>
                        <option value="Poli Umum">Poli Umum</option>
                        <option value="Poli Gigi">Poli Gigi</option>
                        <option value="Poli Mata">Poli Mata</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Senin" class="form-label">Senin</label>
            <input type="text" name="Senin" class="form-control" id="Senin" placeholder="Senin" value="{{ $informasidokter->Senin }}">
        </div>
        <div class="mb-3">
            <label for="Selasa" class="form-label">Selasa</label>
            <input type="text" name="Selasa" class="form-control" id="Selasa" placeholder="Selasa" value="{{ $informasidokter->Selasa }}">
        </div>
        <div class="mb-3">
            <label for="Rabu" class="form-label">Rabu</label>
            <input type="text" name="Rabu" class="form-control" id="Rabu" placeholder="Rabu" value="{{ $informasidokter->Rabu }}">
        </div>
        <div class="mb-3">
            <label for="Kamis" class="form-label">Kamis</label>
            <input type="text" name="Kamis" class="form-control" id="Kamis" placeholder="Kamis" value="{{ $informasidokter->Kamis }}">
        </div>
        <div class="mb-3">
            <label for="Jumat" class="form-label">Jumat</label>
            <input type="text" name="Jumat" class="form-control" id="Jumat" placeholder="Jumat" value="{{ $informasidokter->Jumat }}">
        </div>
        <div class="mb-3">
            <label for="Sabtu" class="form-label">Sabtu</label>
            <input type="text" name="Sabtu" class="form-control" id="Sabtu" placeholder="Sabtu" value="{{ $informasidokter->Sabtu }}">
        </div>
        <div class="mb-3">
            <label for="Status_Kehadiran" class="form-label">Status Kehadiran</label>
            <select name="Status_Kehadiran" id="Status_Kehadiran" class="form-select">
                <option value="" disabled selected>Pilih Status Kehadiran</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
        </div>

        <div class="col-12 text-center mt-4 ">
        <button type="submit" class="btn btn-secondary">Update</button>
        </div>
    </form>
</div>
@endsection
