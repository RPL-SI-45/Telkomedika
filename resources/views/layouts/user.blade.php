<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Telkomedika Dashboard</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body class="bg-gray-100">
    <nav class="bg-red-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 text-white font-bold text-lg">
                        <img src="https://via.placeholder.com/40" class="inline-block mr-2" alt="Logo">
                        Telkomedika Dashboard
                    </div>
                </div>
                <div class="flex items-center">
                    <button class="bg-red-700 p-1 rounded-full text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-700 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <i class="bi bi-bell"></i>
                    </button>
                    <!-- Profile dropdown -->
                    <div x-data="{show: false}" x-on:click.away="show = false" class="ml-3 relative">
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
    </nav>

    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2">
            <div class="text-center">
                <img src="https://via.placeholder.com/50" class="mx-auto mb-4" alt="Logo">
                <span class="font-bold text-xl">Telkomedika</span>
            </div>
            <nav class="space-y-2">
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-house-door-fill mr-3"></i> Dashboard
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-calendar-check-fill mr-3"></i> Reservasi Online
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-people-fill mr-3"></i> Antian Pasien
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-journal-text mr-3"></i> Riwayat Berobat
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-star-fill mr-3"></i> Rating dan Ulasan
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6 bg-white">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-4 bg-white shadow-md rounded-lg text-center">
                    <a href="#">
                        <i class="bi bi-house-fill text-4xl"></i>
                        <h3 class="mt-2 text-lg font-semibold">Informasi Poli</h3>
                    </a>
                </div>
                <div class="p-4 bg-white shadow-md rounded-lg text-center">
                    <a href="#">
                        <i class="bi bi-person-badge-fill text-4xl"></i>
                        <h3 class="mt-2 text-lg font-semibold">Informasi Jadwal Dokter</h3>
                    </a>
                </div>
                <div class="p-4 bg-white shadow-md rounded-lg text-center">
                    <a href="#">
                        <i class="bi bi-building text-4xl"></i>
                        <h3 class="mt-2 text-lg font-semibold">Informasi Rumah Sakit Mitra</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
