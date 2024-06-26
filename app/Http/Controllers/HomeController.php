<?php
 
namespace App\Http\Controllers;
 
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
 
class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
 
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        return view('dashboard');
    }
 
}

