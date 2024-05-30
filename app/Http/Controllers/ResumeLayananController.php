<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResumeLayanan;

class ResumeLayananController extends Controller
{
    public function create()
    {
        return view('resumelayanan');
    }
    public function store(Request $request)
    {
        $request->validate([
            'kinerja_dokter' => 'required|string',
            'kinerja_operasional' => 'required|string',
            'penyakit_terbanyak' => 'required|string',
        ]);
        ResumeLayanan::create([
            'kinerja_dokter' => $request->input('kinerja_dokter'),
            'kinerja_operasional' => $request->input('kinerja_operasional'),
            'penyakit_terbanyak' => $request->input('penyakit_terbanyak'),
        ]);
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
   
