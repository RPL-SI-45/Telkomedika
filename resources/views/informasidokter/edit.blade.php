@extends ('layouts.elemenadmin')

@section('main-section')
<div class="content flex-1 p-20">
<div class="container mt-5">
<div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Informasi Dokter Klinik Telkomedika</div>

</br>

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
            <select name="Senin" id="Senin" class="form-select">
                <option value="" disabled>Pilih Jam Kerja</option>
                <option value="-" {{ $informasidokter->Senin === "-" ? 'selected' : '' }}>Libur</option>
                <option value="08.00 - 12.00" {{ $informasidokter->Senin === "08.00 - 12.00" ? 'selected' : '' }}>08.00 - 12.00</option>
                <option value="09.30 - 13.00" {{ $informasidokter->Senin === "09.30 - 13.00" ? 'selected' : '' }}>09.30 - 13.00</option>
                <option value="11.00 - 16.00" {{ $informasidokter->Senin === "11.00 - 16.00" ? 'selected' : '' }}>11.00 - 16.00</option>
                <option value="13.30 - 16.30" {{ $informasidokter->Senin === "13.30 - 16.30" ? 'selected' : '' }}>13.30 - 16.30</option>
                <option value="14.00 - 18.00" {{ $informasidokter->Senin === "14.00 - 18.00" ? 'selected' : '' }}>14.00 - 18.00</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Selasa" class="form-label">Selasa</label>
            <select name="Selasa" id="Selasa" class="form-select">
                <option value="" disabled>Pilih Jam Kerja</option>
                <option value="-" {{ $informasidokter->Selasa === "-" ? 'selected' : '' }}>Libur</option>
                <option value="08.00 - 12.00" {{ $informasidokter->Selasa === "08.00 - 12.00" ? 'selected' : '' }}>08.00 - 12.00</option>
                <option value="09.30 - 13.00" {{ $informasidokter->Selasa === "09.30 - 13.00" ? 'selected' : '' }}>09.30 - 13.00</option>
                <option value="11.00 - 16.00" {{ $informasidokter->Selasa === "11.00 - 16.00" ? 'selected' : '' }}>11.00 - 16.00</option>
                <option value="13.30 - 16.30" {{ $informasidokter->Selasa === "13.30 - 16.30" ? 'selected' : '' }}>13.30 - 16.30</option>
                <option value="14.00 - 18.00" {{ $informasidokter->Selasa === "14.00 - 18.00" ? 'selected' : '' }}>14.00 - 18.00</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Rabu" class="form-label">Rabu</label>
            <select name="Rabu" id="Rabu" class="form-select">
                <option value="" disabled>Pilih Jam Kerja</option>
                <option value="-" {{ $informasidokter->Rabu === "-" ? 'selected' : '' }}>Libur</option>
                <option value="08.00 - 12.00" {{ $informasidokter->Rabu === "08.00 - 12.00" ? 'selected' : '' }}>08.00 - 12.00</option>
                <option value="09.30 - 13.00" {{ $informasidokter->Rabu === "09.30 - 13.00" ? 'selected' : '' }}>09.30 - 13.00</option>
                <option value="11.00 - 16.00" {{ $informasidokter->Rabu === "11.00 - 16.00" ? 'selected' : '' }}>11.00 - 16.00</option>
                <option value="13.30 - 16.30" {{ $informasidokter->Rabu === "13.30 - 16.30" ? 'selected' : '' }}>13.30 - 16.30</option>
                <option value="14.00 - 18.00" {{ $informasidokter->Rabu === "14.00 - 18.00" ? 'selected' : '' }}>14.00 - 18.00</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Kamis" class="form-label">Kamis</label>
            <select name="Kamis" id="Kamis" class="form-select">
                <option value="" disabled>Pilih Jam Kerja</option>
                <option value="-" {{ $informasidokter->Kamis === "-" ? 'selected' : '' }}>Libur</option>
                <option value="08.00 - 12.00" {{ $informasidokter->Kamis === "08.00 - 12.00" ? 'selected' : '' }}>08.00 - 12.00</option>
                <option value="09.30 - 13.00" {{ $informasidokter->Kamis === "09.30 - 13.00" ? 'selected' : '' }}>09.30 - 13.00</option>
                <option value="11.00 - 16.00" {{ $informasidokter->Kamis === "11.00 - 16.00" ? 'selected' : '' }}>11.00 - 16.00</option>
                <option value="13.30 - 16.30" {{ $informasidokter->Kamis === "13.30 - 16.30" ? 'selected' : '' }}>13.30 - 16.30</option>
                <option value="14.00 - 18.00" {{ $informasidokter->Kamis === "14.00 - 18.00" ? 'selected' : '' }}>14.00 - 18.00</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Jumat" class="form-label">Jumat</label>
            <select name="Jumat" id="Jumat" class="form-select">
                <option value="" disabled>Pilih Jam Kerja</option>
                <option value="-" {{ $informasidokter->Jumat === "-" ? 'selected' : '' }}>Libur</option>
                <option value="08.00 - 12.00" {{ $informasidokter->Jumat === "08.00 - 12.00" ? 'selected' : '' }}>08.00 - 12.00</option>
                <option value="09.30 - 13.00" {{ $informasidokter->Jumat === "09.30 - 13.00" ? 'selected' : '' }}>09.30 - 13.00</option>
                <option value="11.00 - 16.00" {{ $informasidokter->Jumat === "11.00 - 16.00" ? 'selected' : '' }}>11.00 - 16.00</option>
                <option value="13.30 - 16.30" {{ $informasidokter->Jumat === "13.30 - 16.30" ? 'selected' : '' }}>13.30 - 16.30</option>
                <option value="14.00 - 18.00" {{ $informasidokter->Jumat === "14.00 - 18.00" ? 'selected' : '' }}>14.00 - 18.00</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Sabtu" class="form-label">Sabtu</label>
            <select name="Sabtu" id="Sabtu" class="form-select">
                <option value="" disabled>Pilih Jam Kerja</option>
                <option value="-" {{ $informasidokter->Sabtu === "-" ? 'selected' : '' }}>Libur</option>
                <option value="08.00 - 12.00" {{ $informasidokter->Sabtu === "08.00 - 12.00" ? 'selected' : '' }}>08.00 - 12.00</option>
                <option value="09.30 - 13.00" {{ $informasidokter->Sabtu === "09.30 - 13.00" ? 'selected' : '' }}>09.30 - 13.00</option>
                <option value="11.00 - 16.00" {{ $informasidokter->Sabtu === "11.00 - 16.00" ? 'selected' : '' }}>11.00 - 16.00</option>
                <option value="13.30 - 16.30" {{ $informasidokter->Sabtu === "13.30 - 16.30" ? 'selected' : '' }}>13.30 - 16.30</option>
                <option value="14.00 - 18.00" {{ $informasidokter->Sabtu === "14.00 - 18.00" ? 'selected' : '' }}>14.00 - 18.00</option>
            </select>
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
