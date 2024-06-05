@extends('layouts.elemenadmin')

@push('head')
    <style>
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #e0e0e0;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }
        .form-control {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        .btn-submit {
            background-color: #B6252A;
            border: none;
            padding: 12px 50px;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }
        .btn-submit:hover {
            background-color: #9b2023;
        }
        .text-danger {
            color: red;
            font-size: 14px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-header {
            margin-bottom: 30px;
            text-align: center;
            font-family: Montserrat, sans-serif;
            font-weight: bold;
        }
    </style>
@endpush

@section('main-section')
<div class="content flex-1 p-10">
    <div class="container mt-5">
        <div class="form-header">
            <h2>Pelaporan Resume Kinerja Telkomedika</h2>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
<<<<<<< daffa3
        <form action="/resumelayanan/store" method="POST">
=======

        <form action="{{ route('resume.index') }}" method="POST">
>>>>>>> main
            @csrf
            <div class="form-group">
                <label for="nama_resume" class="form-label">Nama Resume</label>
                <textarea name="nama_resume" id="nama_resume" class="form-control" rows="3">{{ old('nama_resume') }}</textarea>
                @error('nama_resume')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tanggal_dibuat" class="form-label">Tanggal Dibuat</label>
                <input type= "date" name="tanggal_dibuat" id="tanggal_dibuat" class="form-control" rows="3">{{ old('tanggal_dibuat') }}
                @error('tanggal_dibuat')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="kinerja_dokter" class="form-label">Kinerja Dokter</label>
                <textarea name="kinerja_dokter" id="kinerja_dokter" class="form-control" rows="4">{{ old('kinerja_dokter') }}</textarea>
                @error('kinerja_dokter')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="kinerja_operasional" class="form-label">Kinerja Operasional</label>
                <textarea name="kinerja_operasional" id="kinerja_operasional" class="form-control" rows="4">{{ old('kinerja_operasional') }}</textarea>
                @error('kinerja_operasional')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="penyakit_terbanyak" class="form-label">Penyakit Terbanyak</label>
                <textarea name="penyakit_terbanyak" id="penyakit_terbanyak" class="form-control" rows="4">{{ old('penyakit_terbanyak') }}</textarea>
                @error('penyakit_terbanyak')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        <br>
            <div class="form-actions">
                <button type="submit" class="btn-submit" style="transform: translateX(350%);">Kirim</button>
            </div>
        </form> 
    </div>
@endsection
