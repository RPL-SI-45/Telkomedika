<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResumeLayanan;

class ResumeLayananController extends Controller
{
    public function index() {
        $ResumeLayanan = ResumeLayanan::all();
        return view('resumeindex', compact(['ResumeLayanan']));
    }

    public function create()
    {
        return view('resumelayanan');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_resume' => 'required|string',
            'tanggal_dibuat' => 'required|date',
            'kinerja_dokter' => 'required|string',
            'kinerja_operasional' => 'required|string',
            'penyakit_terbanyak' => 'required|string',
        ]);
        ResumeLayanan::create([
            'nama_resume' => $request->input('nama_resume'),
            'tanggal_dibuat' => $request->input('tanggal_dibuat'),
            'kinerja_dokter' => $request->input('kinerja_dokter'),
            'kinerja_operasional' => $request->input('kinerja_operasional'),
            'penyakit_terbanyak' => $request->input('penyakit_terbanyak'),
        ]);
        return redirect('/resumelayanan');
    }
    public function viewresume($id)
    {
        $ResumeLayanan = ResumeLayanan::findOrFail($id);
        return view('viewresume', compact('ResumeLayanan'));
    }
    public function edit($id)
    {
        $ResumeLayanan = ResumeLayanan::find($id);
        return view('resumeedit', compact(['ResumeLayanan']));
    }
    public function update($id, request $request)
    {
        $ResumeLayanan = ResumeLayanan::find($id);
        $ResumeLayanan->update($request->except(['_token', 'submit']));
        return redirect('/resumelayanan');
    }
    public function destroy($id)
    {
        $ResumeLayanan = ResumeLayanan::find($id);
        $ResumeLayanan->delete();
        return redirect('/resumelayanan');
    }
}
   
