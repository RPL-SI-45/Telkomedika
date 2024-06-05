@extends ('layouts.elemenadmin')

@section('main-section')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Informasi Antrian</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class="content flex-1 p-10">
    <div class="container mt-5">
        <div class="card" style="border: 2px solid black">
            <div class="card-body">
            <h5 class="card-title" style="text-align: center">Klinik Telkomedika</h5>
            <h6 class="card-subtitle mb-2 text-muted"style="text-align: center">Nomor Antrian</h6>
            <hr>
                <h1 style="text-align: center; font-size: 50px; "><strong>{{ $antrian->no_antrian }}</strong></h1>

      <hr>
      <div class="card-footer">
          <h6 style="text-align: center">"Terima Kasih Atas Kunjungan Anda"</h6>
      </div>
      <a href="/antrian/{id}/showadmin" class="btn btn-secondary btn-sm" style="display: block; margin-button: 10px;">Back</a>

    </div>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
@endsection
