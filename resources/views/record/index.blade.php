@extends("layouts.reservasimain")

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
    </style>
</head>
<body>

<div class="container">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="background-color: #B6252A;">
                <h3 class="text-center" style="color: white;">Riwayat Berobat</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" id="name" value="Cindy P Gandis Ayu">
                    </div>
                    <div class="form-group">
                        <label for="date_of_visit">Tanggal Berobat:</label>
                        <input type="text" class="form-control" id="date_of_visit" value="22 April 2023">
                    </div>
                    <div class="form-group">
                        <label for="health_condition">Kondisi Kesehatan:</label>
                        <textarea class="form-control" id="health_condition" rows="3" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</textarea>
                    </div>
                    <div class="form-group">
                        <label for="diagnosis">Diagnosis:</label>
                        <textarea class="form-control" id="diagnosis" rows="3" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id metus eu libero pretium interdum. Nulla facilisi.</textarea>
                    </div>
                    <div class="form-group">
                        <label for="treatment">Pengobatan:</label>
                        <textarea class="form-control" id="treatment" rows="3" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id metus eu libero pretium interdum. Nulla facilisi.</textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection
