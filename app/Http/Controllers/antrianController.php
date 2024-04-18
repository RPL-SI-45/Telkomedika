<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\antrian;

class antrianController extends Controller{

        public function index(){
            $antrian = antrian::all();
            return view('layouts.index', compact(['antrian']));
        }

        public function welcome(){
            $antrian = antrian::all();
            return view('welcome', compact(['antrian']));
        }
        public function card() {
            $antrian = antrian::all();
            return view('layouts.card', compact('antrian'));}

        public function store(Request $request){
        $request->validate(
            [
                'id',
                'no_antrian' => 'required',
                'nama_pasien' => 'required',
                'jenis_kelamin' => 'required',
                'poli' => 'required',
                'tanggal_reservasi' => 'required',
                'status_pelayanan' => 'required'
            ]);

            $antrian=new antrian([
                'id',
                'no_antrian' => $request->no_antrian,
                'nama_pasien' => $request->nama_pasien,
                'jenis_kelamin' => $request->jenis_kelamin,
                'poli' => $request -> poli,
                'tanggal_reservasi' => $request -> tanggal_reservasi,
                'status_pelayanan' => $request -> status_pelayanan, ]);
            $antrian->save();
            return redirect("/antrian");
        }

        public function edit($id){
            $antrian=antrian::find($id);
            return view('layouts.update', compact(['antrian']));
        }

        public function update($id, Request $request){
            $request->validate([
            'no_antrian' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'poli' => 'required',
            'status_pelayanan' => 'required',
            ]);
            $antrian=antrian::find($id);
            $antrian->update($request -> except(['_token','submit'])) ;
            return redirect("/antrian");
        }

        public function destroy ($id){
            $antrian = antrian::find($id);
            $antrian->delete();
            return redirect('/antrian');
        }

        public function informasi(){
            $antrian = antrian::all();
            return view('informasi', compact(['antrian']));
        }
}
