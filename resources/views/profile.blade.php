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
</head>
<body>
    <div class="min-h-screen p-6 flex items-center justify-center" style="background-color: #B6252A;">
        <div class="container max-w-screen-lg mx-auto">
        <form action="{{ route('update-profiladmin', ['id' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Profile Settings</p>
                            <div class="mt-5">
                            <img src="{{ Auth::check() && Auth::user()->profile_image ? asset('storage/profile-image/' . Auth::user()->profile_image) : 'https://via.placeholder.com/150' }}" alt="Profile Image" class="object-cover rounded-full w-2/4">
                                <input dusk="inputfoto" type="file" class="mt-5" name="profile_image"/>
                            </div>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('name', Auth::check() ? Auth::user()->name : '') }}"/>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="telp">Telp</label>
                                    <input type="text" name="telp" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('telp', Auth::check() ? Auth::user()->telp : '') }}"/>
                                </div>

                                <div class="md:col-span-5">
                                   <label for="username">Username</label>
                                    <input type="text" name="username" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('username', Auth::check() ? Auth::user()->username : '') }}"/>
                                </div>

                                <div class="md:col-span-5">
                                   <label for="type">User Type</label>
                                    <input type="text" name="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ Auth::check() ? Auth::user()->type : '' }}" disabled/>
                                </div>

                                <div class="md:col-span-2 text-right">
                                    <div class="inline-flex items-end">
                                        <button dusk="update" type="submit" class="hover:bg-red-700 text-white font-bold py-2 px-4 rounded" style="background-color: #808080;">Update</button>
                                    </div>
                                </div>

                                <div class="md:col-span-2 text-right">
                                    <div class="inline-flex items-end">
                                        <a dusk="home" href="{{ route('admin/home') }}" class="hover:bg-red-700 text-white font-bold py-2 px-4 rounded" style="background-color: #808080;">Home</a>
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
