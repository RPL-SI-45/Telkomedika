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
    
}