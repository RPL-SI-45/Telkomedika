@extends ('rekammedis.main')

@push('header')
    <title>REKAM MEDIS PASIEN</title>
@endpush

@section('main-section')


<div class="d-sm-flex align-items-center justify-content-between mb-4"></div>
</br>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3"; style="background-color: #B6252A";>
                <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary" type="submit">Search</button>
    </form>
  </div>
</nav>
                
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr class="text-center">
                <th>ID</th>
                <th>Nama Pasien</th>
                <th>Tanggal Reservasi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rekammedis as $w)
            <tr class="text-center">
                <td>{{ $w->id}}</td>
                <td>{{ $w->nama_pasien }}</td>
                <td>{{ $w->tanggal_reservasi }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-primary btn-sm" href="/rekammedis/{{$w->id}}/view">View</a>
                        <a class="btn btn-danger btn-sm" href="">Delete</a>

                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
