<?php

namespace App\Http\Controllers;
use App\Models\poli;
use Illuminate\Http\Request;

class PolipasienController extends Controller
{
    public function index() {
        $poli = poli::all();
        return view('polipasien.pasien_index', compact(['poli']));
    }
    public function store(Request $request)
    {
        $poli = poli::all();
        return view('polipasien.pasien_index', compact(['poli']));
    }

}


