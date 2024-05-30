<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Profile Page</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 500px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        a {
            color: #007bff;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }

        a:hover {
            text-decoration: underline;
        }
    </style> -->
</head>
<body>
    <!-- <div class="container">
        <h1>Profile Page</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('update-profile', ['id' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <img src="{{ Auth::user()->profile_image ? asset('storage/profile-image/' . Auth::user()->profile_image) : 'https://via.placeholder.com/150' }}" alt="Profile Image" width="150" style="border-radius: 50%;">
                <input type="file" name="profile_image">
            </div>

            <div>
                <input type="text" name="name" placeholder="Nama" value="{{ old('name', Auth::user()->name) }}">
            </div>

            <div>
                <input type="text" name="telp" placeholder="No Telepon" value="{{ old('telp', Auth::user()->telp) }}">
            </div>

            <div>
                <input type="text" name="kartu" placeholder="Nomor Kartu" value="{{ old('kartu', Auth::user()->kartu) }}">
            </div>

            <div>
                <input type="text" name="alamat" placeholder="Alamat" value="{{ old('alamat', Auth::user()->alamat) }}">
            </div>

            <div>
                <input type="text" name="nim" placeholder="NIM" value="{{ old('nim', Auth::user()->nim) }}">
            </div>

            <div>
                <input type="text" name="type" value="{{ Auth::user()->type }}" placeholder="User Type" disabled>
            </div>

            <div>
                <button type="submit">Update</button>
                <a href="{{ route('home') }}">Home</a>
            </div>
        </form>
    </div> -->
    <div class="min-h-screen p-6 bg-red-500 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <form action="{{ route('update-profile', ['id' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Profile Settings</p>
                            <div class="mt-5">
                                <img src="{{ Auth::user()->profile_image ? asset('storage/profile-image/' . Auth::user()->profile_image) : 'https://via.placeholder.com/150' }}" alt="Profile Image" class="object-cover rounded-full w-2/4">
                                <input type="file" class="mt-5" name="profile_image"/>
                            </div>
                        </div>                    

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('name', Auth::user()->name) }}"/>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="telp">No Telp</label>
                                    <input type="text" name="telp" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('telp', Auth::user()->telp) }}"/>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="kartu">Nomor Kartu</label>
                                    <input type="text" name="kartu" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('kartu', Auth::user()->kartu) }}"/>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('alamat', Auth::user()->alamat) }}"/>
                                </div>

                                <div class="md:col-span-5">
                                   <label for="nim">NIM</label>
                                    <input type="text" name="nim" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('nim', Auth::user()->nim) }}"/>
                                </div>

                                <div class="md:col-span-5">
                                   <label for="nim">User Type</label>
                                    <input type="text" name="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ Auth::user()->type }}" disabled/>
                                </div>
            
                                <div class="md:col-span-2 text-right">
                                    <div class="inline-flex items-end">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                                    </div>
                                </div>

                                <div class="md:col-span-2 text-right">
                                    <div class="inline-flex items-end">
                                        <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Home</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

