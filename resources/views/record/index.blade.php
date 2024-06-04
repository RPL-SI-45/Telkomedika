@extends ('layouts.elemen')

@push('header')
    <title>Riwayat Berobat Pasien</title>
@endpush


@section('main-section')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Berobat</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            font-weight: bold;
        }
        .text-primary {
            color: #B6252A !important;
        }

        .bg-primary {
            background-color: #B6252A !important;
        }

        .btn-primary {
            background-color: #B6252A !important;
            border-color: #B6252A !important;
        }

        .border-primary {
            border-color: #B6252A !important;
        }

        .btn-outline-primary {
            color: #B6252A !important;
            border-color: #B6252A !important;
        }

        .btn-outline-primary:hover {
            background-color: #B6252A !important;
            border-color: #B6252A !important;
        }

        .sidebar {
            width: 280px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #4A5568;
            text-decoration: none;
        }
    </style>
</head>
<body>
@foreach ($rekammedis as $w)
<div class="content flex-1 p-10">
<div class="container mt-5">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="background-color: #B6252A;">
                <h3 class="text-center" style="color: white;">Riwayat Berobat</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" id="name" value="{{$w->nama_pasien}}">
                    </div>
                    <div class="form-group">
                        <label for="date_of_visit">Tanggal Pelayanan:</label>
                        <input type="text" class="form-control" id="date_of_visit" value="{{$w->tanggal_reservasi}}">
                    </div>
                    <div class="form-group">
                        <label for="dokter">Dokter Pemeriksa:</label>
                        <textarea class="form-control" id="dokter" rows="3" readonly>{{$w->dokter}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="diagnosis">Hasil Pemekrisaan Fisik:</label>
                        <textarea class="form-control" id="fisik" rows="3" readonly>{{$w->fisik}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="treatment">Diagnosis:</label>
                        <textarea class="form-control" id="diagnosis" rows="3" readonly>{{$w->diagnosis}}</textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endforeach
@endsection
