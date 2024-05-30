<!DOCTYPE html>
<html>
<head>
    <title>Notifications</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .notification {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px 0;
        }
        .notification-header {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Notifications</h1>
    @if($antrian->isEmpty())
        <p>No notifications found.</p>
    @else
        @foreach ($antrian as $antri)
            <div class="notification">
                 <p>Antrian Number: {{ $antri->no_antrian}}</p>
            </div>
        @endforeach
    @endif
</body>
</html>