<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 
class AdminController extends Controller
{
    public function profilepage()
    {
        return view('profile');
    }

    public function update(int $id) {
        $data = [
            "name" => request()->get('name'),
            "telp" => request()->get('telp'),
            "username" => request()->get('username'),
        ];
        if (request()->file()) {
            request()->validate([
                'profile_image' => 'required|image|mimes:jpeg,jpg,png,gif',
            ]);
            $fileName = Auth::user()->name.'.'.request()->file('profile_image')->extension();
            $filePath = request()->file('profile_image')->storeAs('profile-image', $fileName, 'public');
            $data["profile_image"] = $fileName;
        }
        User::where('id', $id)->update($data);
        return redirect('/admin/profile');
    }
}
