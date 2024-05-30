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
    <div class="min-h-screen p-6 bg-red-500 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <form action="{{ route('admin/profile/edit', ['id' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="telp">Telp</label>
                                    <input type="text" name="telp" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('telp', Auth::user()->telp) }}"/>
                                </div>

                                <div class="md:col-span-5">
                                   <label for="username">Username</label>
                                    <input type="text" name="username" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('username', Auth::user()->username) }}"/>
                                </div>

                                <div class="md:col-span-5">
                                   <label for="type">User Type</label>
                                    <input type="text" name="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ Auth::user()->type }}" disabled/>
                                </div>
            
                                <div class="md:col-span-2 text-right">
                                    <div class="inline-flex items-end">
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Update</button>
                                    </div>
                                </div>

                                <div class="md:col-span-2 text-right">
                                    <div class="inline-flex items-end">
                                        <a href="{{ route('admin/home') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Home</a>
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

<div class="min-h-screen bg-red-700 flex items-center justify-center">
    <div class="bg-white p-10 rounded-lg shadow-lg w-1/2">
        <h2 class="text-gray-700 text-2xl mb-4">Profile Settings</h2>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="flex items-center space-x-6">
                <div class="w-1/4">
                    <div class="flex flex-col items-center">
                        <img class="h-32 w-32 rounded-full border border-gray-300" src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : 'https://via.placeholder.com/150' }}" alt="Profile Picture">
                        <label for="profile_picture" class="mt-4">
                            <span class="bg-red-200 text-red-700 px-4 py-2 rounded-full cursor-pointer">Choose File</span>
                            <input type="file" id="profile_picture" name="profile_picture" class="hidden">
                        </label>
                    </div>
                </div>
                <div class="w-3/4">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                    </div>

                    <div class="mb-4">
                        <label for="telp" class="block text-sm font-medium text-gray-700">No Telepon</label>
                        <input type="text" id="telp" name="telp" value="{{ auth()->user()->telp }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                    </div>

                    <div class="mb-4">
                        <label for="kartu" class="block text-sm font-medium text-gray-700">Nomor Kartu</label>
                        <input type="text" id="kartu" name="kartu" value="{{ auth()->user()->kartu }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                    </div>

                    <div class="mb-4">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <input type="text" id="alamat" name="alamat" value="{{ auth()->user()->alamat }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                    </div>

                    <div class="mb-4">
                        <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
                        <input type="text" id="nim" name="nim" value="{{ auth()->user()->nim }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                    </div>

                    <div class="mb-4">
                        <label for="user_type" class="block text-sm font-medium text-gray-700">User Type</label>
                        <input type="text" id="user_type" name="user_type" value="{{ auth()->user()->type }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2" readonly>
                    </div>
                </div>
            </div>

            <div class="flex justify-end space-x-4">
                <button type="submit" class="bg-red-700 text-white px-4 py-2 rounded-md">Update</button>
                <a href="{{ route('home') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md">Home</a>
            </div>
        </form>
    </div>
</div>

