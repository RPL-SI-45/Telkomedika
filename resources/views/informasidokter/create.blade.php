@extends ('layouts.elemenadmin')

@section('main-section')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tambah Informasi Dokter</title>
</head>
<body>
<div class="content flex-1 p-20">
    <div class="container mt-5">
    <div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Informasi Dokter Klinik Telokomedika</div>
        </br>
    <div class = "card">
        <div class = "card-body">
        <form action="/informasidokter/store" method="POST">
            @csrf

            <div class="mb-3">
                <label for="Nama_Dokter" class="form-label">Nama Dokter</label>
                <input type="text" name="Nama_Dokter" class="form-control" placeholder="Nama Dokter">
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

            <div class="mb-3">
                <label for="Senin" class="form-label">Senin</label>
                <select name="Senin" id="Senin" class="form-select">
                    <option value="" disabled selected>Pilih Jam Kerja</option>
                    <option value="-">Libur</option>
                    <option value="08.00 - 12.00">08.00 - 12.00</option>
                    <option value="09.30 - 13.00">09.30 - 13.00</option>
                    <option value="11.00 - 16.00">11.00 - 16.00</option>
                    <option value="13.30 - 16.30">13.30 - 16.30</option>
                    <option value="14.00 - 18.00">14.00 - 18.00</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Selasa" class="form-label">Selasa</label>
                <select name="Selasa" id="Selasa" class="form-select">
                    <option value="" disabled selected>Pilih Jam Kerja</option>
                    <option value="-">Libur</option>
                    <option value="08.00 - 12.00">08.00 - 12.00</option>
                    <option value="09.30 - 13.00">09.30 - 13.00</option>
                    <option value="11.00 - 16.00">11.00 - 16.00</option>
                    <option value="13.30 - 16.30">13.30 - 16.30</option>
                    <option value="14.00 - 18.00">14.00 - 18.00</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Rabu" class="form-label">Rabu</label>
                <select name="Rabu" id="Rabu" class="form-select">
                    <option value="" disabled selected>Pilih Jam Kerja</option>
                    <option value="-">Libur</option>
                    <option value="08.00 - 12.00">08.00 - 12.00</option>
                    <option value="09.30 - 13.00">09.30 - 13.00</option>
                    <option value="11.00 - 16.00">11.00 - 16.00</option>
                    <option value="13.30 - 16.30">13.30 - 16.30</option>
                    <option value="14.00 - 18.00">14.00 - 18.00</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Kamis" class="form-label">Kamis</label>
                <select name="Kamis" id="Kamis" class="form-select">
                    <option value="" disabled selected>Pilih Jam Kerja</option>
                    <option value="-">Libur</option>
                    <option value="08.00 - 12.00">08.00 - 12.00</option>
                    <option value="09.30 - 13.00">09.30 - 13.00</option>
                    <option value="11.00 - 16.00">11.00 - 16.00</option>
                    <option value="13.30 - 16.30">13.30 - 16.30</option>
                    <option value="14.00 - 18.00">14.00 - 18.00</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Jumat" class="form-label">Jumat</label>
                <select name="Jumat" id="Jumat" class="form-select">
                    <option value="" disabled selected>Pilih Jam Kerja</option>
                    <option value="-">Libur</option>
                    <option value="08.00 - 12.00">08.00 - 12.00</option>
                    <option value="09.30 - 13.00">09.30 - 13.00</option>
                    <option value="11.00 - 16.00">11.00 - 16.00</option>
                    <option value="13.30 - 16.30">13.30 - 16.30</option>
                    <option value="14.00 - 18.00">14.00 - 18.00</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Sabtu" class="form-label">Sabtu</label>
                <select name="Sabtu" id="Sabtu" class="form-select">
                    <option value="" disabled selected>Pilih Jam Kerja</option>
                    <option value="-">Libur</option>
                    <option value="08.00 - 12.00">08.00 - 12.00</option>
                    <option value="09.30 - 13.00">09.30 - 13.00</option>
                    <option value="11.00 - 16.00">11.00 - 16.00</option>
                    <option value="13.30 - 16.30">13.30 - 16.30</option>
                    <option value="14.00 - 18.00">14.00 - 18.00</option>
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
            <button type="submit" class="btn btn-secondary">Save</button> </div>
        </form>
    </div>
</body>
</html>
@endsection
