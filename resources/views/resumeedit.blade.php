@extends ('resume')

@push('head')
    <style>
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn-submit {
            background-color: #B6252A;
            border: none;
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            position: relative;
            right: 0;
            bottom: 0;
            margin: 20px 0 0 0;
        }
        .text-danger {
            color: red;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-actions {
            display: flex;
            justify-content: flex-end;
        }
    </style>
@endpush

@section('main-section')
<div class="content flex-1 p-20">
<div class="container mt-5">
        <div class = "card">
            <div class = "card-body">
                <form action="/resumelayanan/{{$ResumeLayanan->id}}" method="POST">
                @method('put')
                @csrf
                <div class="form-group">
                <label for="kinerja_dokter" class="form-label">Kinerja Dokter</label>
                <textarea name="kinerja_dokter" id="kinerja_dokter" class="form-control" rows="3">{{ old('kinerja_dokter', $ResumeLayanan->kinerja_dokter) }}</textarea>
                @error('kinerja_dokter')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="kinerja_operasional" class="form-label">Kinerja Operasional</label>
                    <textarea name="kinerja_operasional" id="kinerja_operasional" class="form-control" rows="3">{{ old('kinerja_operasional', $ResumeLayanan->kinerja_operasional) }}</textarea>
                    @error('kinerja_operasional')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="penyakit_terbanyak" class="form-label">Penyakit Terbanyak</label>
                    <textarea name="penyakit_terbanyak" id="penyakit_terbanyak" class="form-control" rows="3">{{ old('penyakit_terbanyak', $ResumeLayanan->penyakit_terbanyak)}}</textarea>
                    @error('penyakit_terbanyak')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn-submit">Kirim</button>
                </div>
                </form>
            </div>
        </div>
</div>
@endsection
