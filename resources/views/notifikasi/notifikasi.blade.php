<!DOCTYPE html>
<html>
@extends('layoutrumahsakit.rs')

@section('main-section')
<head>
    <title>Notifications</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .notification-card {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f8f9fa; /* Light grey background for all cards */
        }
    </style>
    
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4">Notifications</h1>
        @if($antrian->isEmpty())
            <div class="alert alert-info" role="alert">
                No notifications found.
            </div>
        @else
            @foreach ($antrian as $antri)
                <div class="notification card notification-card mb-3">
                    <div class="card-body">
                        <p class="card-text mb-0">Nomor antrian kamu: <strong>{{ $antri->no_antrian }}</strong></p>
                        <p class="card-text mb-0">Status pelayanan kamu : <strong>{{ $antri->status_pelayanan }}</strong></p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
