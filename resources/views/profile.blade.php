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
