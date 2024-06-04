<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\antrian;
use Illuminate\Support\Facades\Auth;


class MedicalRecordController extends Controller
{
    public function view()
    {
        $rekammedis = Auth::id();
        $rekammedis = antrian::where('id', $rekammedis)->get();
        return view('record.view', compact('rekammedis'));
    }

    public function index()
    {
        $id = Auth::id();
        $rekammedis = antrian::where('id', $id)->get();
        return view('record.index', compact('rekammedis'));
    }
}
