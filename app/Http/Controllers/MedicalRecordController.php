<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicalRecordController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $rekammedis = antrian::where('id', $userId)->get();
        return view('record.index', compact('rekammedis'));
    }
}
