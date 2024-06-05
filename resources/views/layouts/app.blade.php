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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .item img {
            height: auto;
            width: auto;
            max-height: 700px;
            size: cover;

        }

        .carousel-caption {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
        }

        .carousel-caption h3,
        .carousel-caption p {
            color: #fff;
        }

        .text-primary {
            color: #B6252A !important;
        }

        .bg-primary {
            background-color: #B6252A !important;
        }

        .btn-primary {
            background-color: #B6252A !important;
            border-color: #B6252A !important;
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
                            <span class="text-white ml-2">Admin</span>
                        </button>
                    </div>
                    <div x-show="show" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="{{ url('/profiladmin') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0" style="color: black; text-decoration: none; border-bottom: none; transition: font-weight 0.3s;" onmouseover="this.style.fontWeight='bold';" onmouseout="this.style.fontWeight='normal';">Your Profile</a>
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2" style="color: black; text-decoration: none; border-bottom: none; transition: font-weight 0.3s;" onmouseover="this.style.fontWeight='bold';" onmouseout="this.style.fontWeight='normal';">Sign out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 space-y-6 py-20 px-2 sidebar">
            <nav class="space-y-2">
                <a href="/admin/home" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-house-door-fill mr-3"></i> Dashboard
                </a>
                <a href="/poli" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-house-fill mr-3"></i> Informasi Poli
                </a>
                <a href="/informasidokter" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-person-badge mr-3"></i> Informasi Dokter
                </a>
                <a href="/rumahsakit" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-building mr-3"></i> Informasi Rumah Sakit
                </a>
                <a href="/createadmin" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-calendar-check-fill mr-3"></i> Reservasi Online
                </a>
                <a href="/daftarreservasi" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-people-fill mr-3"></i> Antrian Pasien
                </a>
                <a href="/rekammedis" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-journal-text mr-3"></i> Riwayat Berobat
                </a>
                <a href="/ratingadmin" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-star-fill mr-3"></i> Rating dan Ulasan
                </a>
                <a href="/resumelayanan" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="bi bi-book mr-3"></i> Resume Pelayanan
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="content flex-1 p-10">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="{{asset('img/gambar-1.jpg')}}" alt="Image 1">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/carousel-1.jpg')}}" alt="Image 2">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/gambar1.jpg')}}" alt="Image 3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            <script>
                $(document).ready(function() {
                    $(".owl-carousel").owlCarousel({
                        autoplay: true,
                        loop: true,
                        autoplayTimeout: 3000,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 1
                            },
                            1000: {
                                items: 1
                            }
                        }
                    });
                });
            </script>
        </br>
            <!-- About Start -->
            <div class="container-xxl py-5">
                <div class="container-fluid">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex flex-column">
                                <img class="img-fluid rounded w-75 align-self-end" src="{{asset('img/telkom.jpg')}}" alt="">
                                <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{asset('img/klinik.jpg')}}" alt="" style="margin-top: -25%;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                            <h1 class="mb-4">Why You Should Trust Us? Get Know About Us!</h1>
                            <p>Telkomedika merupakan pusat layanan kesehatan bagi seluruh mahasiswa dan civitas akademik Telkom University.
                                Fasilitas kesehatan Telkomedika ini berada di klinik Pratama Telkom University. Adapun beberapa pelayanan
                                kesehatan Telkomedika ini meliputi pengecekan kesehatan dan konsultasi bersama dokter umum, perawatan dan
                                pemeriksaan mata, perawatan dan pengobatan gigi, perawatan gawat darurat,
                                rawat jalan, rawat inap, apotik dan jasa rujukan ke rumah sakit.</p>

                            <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="/infotelkomedikaadmin">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

        </div>
    </div>
    <!-- Footer Start -->
<div class="container-fluid text-light footer" data-wow-delay="0.1s" style="background-color: #1F2937; padding: 10px;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <!-- Google Maps embed code here -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.083137801683!2d107.630392!3d-6.9773433!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9ac24f5babb%3A0x2ca9f636654d9715!2sKlinik%20Telkomedika!5e0!3m2!1sid!2sid!4v1717257542757!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-lg-3">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marked"></i> Gedung Business Center, Jl. Telekomunikasi, Sukapura, Dayeuhkolot, Bandung, Jawa Barat, Indonesia 40257</p>

                </div>
                <div class="col-lg-3">
                    <h4 class="text-light mb-4">Contact</h4>
                    <p class="mb-2"><i class="bi bi-whatsapp me-3"></i>Whatsapp +62-811-2473-069</p>
                    <p class="mb-2"><i class="bi bi-telephone me-3"></i>Call Center 1500115</p>
                    <p class="mb-2"><i class="bi bi-envelope me-3"></i>Email cs@telkomedika.co.id</p>

                </div>
            </div>
        </div>
    </div>
<!-- Footer End -->
    <footer>
        <div class="bg" style="height: 60px; background-color:  #2D3748; width: 100%; position: fixed; top: 700px; left: 0; z-index: 1000; color: #fff; text-align: center;">
            <p>Copyright &copy; 2024 All rights reserved | Kelompok D Telkomedika</p>
        </div>
    </footer>
</body>

</html>

