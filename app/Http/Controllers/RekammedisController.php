<?php

namespace App\Http\Controllers;

use App\Models\antrian;
use Illuminate\Http\Request;

class RekammedisController extends Controller{

    public function index(){
    $rekammedis = antrian::where("status_pelayanan", "Selesai")->get();
    return view('rekammedis.index', compact('rekammedis'));
    }

    public function store(Request $request){
        $request->validate([
            'nama_pasien',
            'tanggal_pelayanan',
            'hasil_diagnosa'
        ]);

        antrian::create([
            'nama_pasien' => $request->nama_pasien,
            'tanggal_pelayanan' => $request->tanggal_reservasi,
            'hasil_diagnosa' => $request->hasil_diagnosa

        ]);
        return redirect("/rekammedis");
    }

    public function destroy ($id){
        $rekammedis = rekammedis::find($id);
        $rekammedis->delete();
        return redirect('/rekammedis');
    }

    public function view ($id){
        $rekammedis = antrian::find($id);
        return view('rekammedis.view', compact('rekammedis'));
    }

    public function edit($id){
        $rekammedis = antrian::find($id);
    return view('rekammedis.edit', ['rekammedis' => $rekammedis]);
    }

    public function update($id, Request $request){
        $attributes = $request->validate([
            'dokter' => 'required',
            'fisik' => 'required',
            'diagnosis' => 'required'
        ]);
        $rekammedis = antrian::find($id);
        $data = antrian::where('id',$id)->update([
            "dokter" =>$attributes['dokter'],
            "fisik" =>$attributes['fisik'],
            "diagnosis" =>$attributes['diagnosis'],
        ]);
        return redirect('/rekammedis');
    }

    public function search(Request $request){
    if ($request->has('search')) {
        $rekammedis = antrian::where('nama_pasien', 'LIKE', '%' . $request->search . '%')->get();
    } else {
        $rekammedis = antrian::all();
    }
    return view('rekammedis.index', ['rekammedis' => $rekammedis]);
    }
}
