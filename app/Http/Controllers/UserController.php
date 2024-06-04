<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\HomeController;

class UserController extends Controller
{
    public function userprofile()
    {
        return view('userprofile');
    }

    public function about()
    {
        return view('about');
    }

    public function update(int $id)
    {
        $data = [
            "name" => request()->get('name'),
            "telp" => request()->get('telp'),
            "kartu" => request()->get('kartu'),
            "alamat" => request()->get('alamat'),
            "nim" => request()->get('nim'),
        ];
        if (request()->file()) {
            request()->validate([
                'profile_image' => 'required|image|max:5120|mimes:jpeg,jpg,png,gif',
            ]);
            // echo var_dump(request()->file('profile_image')->extension());
            $fileName = Auth::user()->name.'.'.request()->file('profile_image')->extension();
            $filePath = request()->file('profile_image')->storeAs('profile-image', $fileName, 'public');
            $data["profile_image"] = $fileName;
        }
        User::where('id', $id)->update($data);
        return redirect('/profile');
    }
}
