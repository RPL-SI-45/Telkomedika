<?php

namespace App\Http\Controllers;
use App\Models\reservasi;
use Illuminate\Http\Request;


class ReservasiController extends Controller
{
    public function create ()
    {
       return view ("create");
    }
    public function store (Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required'
        ]);
        reservasi::create($request->except(['_token','submit']));
        return redirect ('/reservasi');
}
}