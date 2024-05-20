<?php

namespace App\Http\Controllers;

use App\Models\antrian;
use Illuminate\Http\Request;

class RekammedisController extends Controller{

    public function index(){
    $rekammedis = antrian::all();
    return view('rekammedis.index', compact('rekammedis'));
    }

    public function store(Request $request){
        $request->validate([
            'nama_pasien',
            'tanggal_pelayanan',
        ]);

        antrian::create([
            'nama_pasien' => $request->nama_pasien,
            'tanggal_pelayanan' => $request->tanggal_reservasi,

        ]);
        return redirect("/rekammedis");
    }

    public function destroy ($id){
        $antrian = antrian::find($id);
        $antrian->delete();
        return redirect('/rekammedis');
    }
}
