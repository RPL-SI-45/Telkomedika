@extends('layouts.elemenadmin')

@push('head')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            border-bottom: 2px solid #ececec;
            padding-bottom: 10px;
            font-weight: 500;
            color: #333;
        }

        .card p {
            margin: 10px 0;
            line-height: 1.6;
            color: #555;
        }

        .card label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .alert {
            padding: 10px;
            background-color: #4caf50;
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #4caf50;
        }
    </style>
@endpush

@section('main-section')
    <div class="container p-10">
    <div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">Resume Layanan Klinik Telkomedika</div></br>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="/resumelayanan/{{$ResumeLayanan->id}}" method="POST">
            @csrf
            @method('put')

            <div class="card">
                <h3>Kinerja Dokter</h3>
                <div class="detail">
                    <label for="kinerja_dokter">Kinerja Dokter:</label>
                    <p>{{ $ResumeLayanan->kinerja_dokter }}</p>
                </div>
            </div>

            <div class="card">
                <h3>Kinerja Operasional</h3>
                <div class="detail">
                    <label for="kinerja_operasional">Kinerja Operasional:</label>
                    <p>{{ $ResumeLayanan->kinerja_operasional }}</p>
                </div>
            </div>

            <div class="card">
                <h3>Penyakit Terbanyak</h3>
                <div class="detail">
                    <label for="penyakit_terbanyak">Penyakit Terbanyak:</label>
                    <p>{{ $ResumeLayanan->penyakit_terbanyak }}</p>
                </div>
            </div>
        </form>
    </div>
@endsection
