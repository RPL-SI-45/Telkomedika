<?php

namespace App\Http\Controllers;
use App\Models\polipasien;
use Illuminate\Http\Request;

class PoliPasienController extends Controller
{
    public function index() {
        $polipasien = polipasien::all();
        return view('polipasien.index', compact(['polipasien']));
    }
}
