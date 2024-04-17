<?php

namespace App\Http\Controllers;
use App\Models\polipasien;
use Illuminate\Http\Request;

class PolipasienController extends Controller
{
    public function index() {
        $polipasien = polipasien::all();
        return view('polipasien.pasien_index', compact(['polipasien']));
    }
    public function store(Request $request)
    {
        $polipasien = polipasien::all();
        return view('polipasien.pasien_index', compact(['polipasien']));
    }

}


