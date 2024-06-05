<?php

namespace App\Http\Controllers;
use App\Models\reservasi;
use Illuminate\Http\Request;


class ReservasiController extends Controller
{
    public function index()
    {
        $reservasi = reservasi::all();
        return view('indexreservasi', compact(['reservasi']));
    }
    public function create()
    {
       return view ("create");
    }
    public function store(Request $request)
    {
            $request->validate([
                    'nama_pasien' => 'required',
                    'jenis_kelamin' => 'required',
                    'no_telp' => 'required',
                    'alamat' => 'required',
                    'poli' => 'required',
                    'keluhan' => 'required',
                    'tanggal_reservasi' => 'required',
                ]);

            reservasi::create([
                    'user_id' => auth()->id(),
                    'nama_pasien' => $request->nama_pasien,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'no_telp' => $request -> no_telp,
                    'alamat' => $request ->alamat,
                    'poli' => $request -> poli,
                    'keluhan' => $request -> keluhan,
                    'tanggal_reservasi' => $request -> tanggal_reservasi,
                ]);
                return redirect("/reservasi");
            }
}
