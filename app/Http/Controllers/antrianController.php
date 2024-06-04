<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\antrian;

class antrianController extends Controller{


    public function welcome(){
        $antrian = antrian::all();
        return view('welcome', compact(['antrian']));
    }

    public function index(){
    $antrian = antrian::where("status_pelayanan", "!=", "Selesai")->orWhereNull('status_pelayanan')->get();
    return view('layouts.index', compact('antrian'));
    }

    public function create(){
        return view('layouts.create');
    }

    public function createadmin(){
        return view('layouts.createadmin');
    }

    public function store(Request $request){
        $request->validate([
            'id',
            'no_antrian',
            'nama_pasien',
            'no_telp',
            'jenis_kelamin',
            'tanggal_reservasi',
            'poli',
            'alamat',
            'keluhan',
            'status_pelayanan'

        ]);

        antrian::create([
            'id',
            'no_antrian' => $request->no_antrian,
            'nama_pasien' => $request->nama_pasien,
            'no_telp' => $request->no_telp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_reservasi' => $request->tanggal_reservasi,
            'poli' => $request->poli,
            'alamat' => $request->alamat,
            'keluhan' => $request->keluhan,
            'status_pelayanan' => $request->status_pelayanan

        ]);
        return redirect("/antrian");
    }

    public function storeadmin(Request $request){
        $request->validate([
            'id',
            'no_antrian',
            'nama_pasien',
            'no_telp',
            'jenis_kelamin',
            'tanggal_reservasi',
            'poli',
            'alamat',
            'keluhan',
            'status_pelayanan'

        ]);

        antrian::create([
            'id',
            'no_antrian' => $request->no_antrian,
            'nama_pasien' => $request->nama_pasien,
            'no_telp' => $request->no_telp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_reservasi' => $request->tanggal_reservasi,
            'poli' => $request->poli,
            'alamat' => $request->alamat,
            'keluhan' => $request->keluhan,
            'status_pelayanan' => $request->status_pelayanan

        ]);
        return redirect("/daftarreservasi");
    }

    public function edit($id){
        $antrian=antrian::find($id);
        $lastNoAntrian = antrian::whereNotNull('no_antrian')->orderBy('no_antrian', 'desc')->first()->no_antrian ?? 0;
        $nextNoAntrian = $antrian->no_antrian ?? $lastNoAntrian + 1;
        return view('layouts.update', compact(['antrian', 'nextNoAntrian']));
    }

    public function update(Request $request, $id){
    $request->validate([
        'id',
        'no_antrian' => 'required|string',
        'nama_pasien' => 'required|string',
        'no_telp' => 'required|string',
        'jenis_kelamin' => 'required|string',
        'tanggal_reservasi' => 'required|date',
        'poli' => 'required|string',
        'alamat' => 'required|string',
        'keluhan' => 'required|string',
        'status_pelayanan' => 'required|string'
    ]);

    $antrian = antrian::findOrFail($id);
    $antrian->update($request->except(['_token', 'submit']));
    if ($request->status_pelayanan === 'Selesai') {
        $antrian->update(['no_antrian' => null]);
    }
    return redirect("/daftarreservasi");
}

    public function destroy ($id){
        $antrian = antrian::find($id);
        $antrian->delete();
        return redirect('/daftarreservasi');
    }

    public function informasi(){
        $antrian = antrian::where("status_pelayanan", "!=", "Selesai")->orWhereNull('status_pelayanan')->get();
        return view('informasi', compact('antrian'));
        $count = Antrian::where('status_pelayanan', '!=', 'selesai')->count();
        session()->flash('antrian_count', $count);
    }

    public function card(Request $request) {
        $antrian = antrian::find($request->id);
        return view('layouts.card', compact('antrian'));
    }
}
