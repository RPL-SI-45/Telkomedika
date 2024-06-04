<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Klinik Pratama Telkomedika</title>
    @stack('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <style>
        .item img {
            height: auto;
            width: auto;
            max-height: 700px;
            size: cover;

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
            height: auto;
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

<body class="bg-gray-100">
    <!-- Custom Top Bar with Navbar -->
    <div class="bg" style="height: 60px; background-color: #B6252A; width: 100%; position: fixed; top: 0; left: 0; z-index: 1000;">
        <div class="container-fluid d-flex align-items-center justify-between h-100">
            <div class="d-flex align-items-center">
                <img src="{{ asset('logo/Telkomedika.png') }}" width="50px" class="me-3">
                <div class="h3 text-white mb-0">Telkomedika</div>
            </div>
            <div class="d-flex align-items-center">
                <button class="bg-red-700 p-1 rounded-full text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-700 focus:ring-white me-3">
                    <span class="sr-only">View notifications</span>
                    <i class="bi bi-bell"></i>
                </button>
                <!-- Profile dropdown -->
                <div x-data="{show: false}" x-on:click.away="show = false" class="relative">
                    <div>
                        <button x-on:click="show = !show" type="button" class="max-w-xs bg-red-700 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-700 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_image ? asset('/storage/profile-image/' . Auth::user()->profile_image) : 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80'}}" alt="">
                            <span class="text-white ml-2">Pasien</span>
                        </button>
                    </div>
                    <div x-show="show" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="{{ url('/profile') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 space-y-6 py-20 px-2 sidebar">
            <nav class="space-y-2">
                <a href="/home" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-house-door-fill mr-3"></i> Dashboard
                </a>
                <a href="/polipasien" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-house-fill mr-3"></i> Informasi Poli
                </a>
                <a href="/informasi" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-person-badge mr-3"></i> Informasi Dokter
                </a>
                <a href="/lihatrumahsakit" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-building mr-3"></i> Informasi Rumah Sakit
                </a>
                <a href="/reservasi/create" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-calendar-check-fill mr-3"></i> Reservasi Online
                </a>
                <a href="/antrian" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-people-fill mr-3"></i> Antrian Pasien
                </a>
                <a href="/medicalrecords" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-journal-text mr-3"></i> Riwayat Berobat
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-star-fill mr-3"></i> Rating dan Ulasan
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                </a>
            </nav>
        </div>
</body>
@yield('main-section')
</html>

