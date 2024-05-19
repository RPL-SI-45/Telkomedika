<?php

namespace App\Http\Controllers;
use App\Models\Rumahsakit;
use Illuminate\Http\Request;

class RumahsakitController extends Controller
{
    public function index() {
        $rumahsakit = Rumahsakit::all();
        return view('rumahsakit.indexrumahsakit', compact(['rumahsakit']));
    }

    public function createrumahsakit() 
    {
        return view('rumahsakit.createrumahsakit');
    }

    public function store(Request $request)
    {
        Rumahsakit::create($request->except(['_token', 'submit']));
        return redirect('/rumahsakit');
    }

    public function edit($id)
    {
        $rumahsakit = Rumahsakit::find($id);
        return view('rumahsakit.editrumahsakit', compact(['rumahsakit']));
    }


    public function update(Request $request, $id)
    {
        $rumahsakit = Rumahsakit::find($id);

        $request->validate([
            'NamaRumahsakit' => 'required',
            'Alamat' => 'required',
            'Notelepon' => 'required',
            'Lokasi' => 'required',
            'Gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('Gambar')) {
            $imagePath = $request->file('Gambar')->store('Gambar', 'public');
            $rumahsakit->update([
                'NamaRumahsakit' => $request->NamaRumahsakit,
                'Alamat' => $request->Alamat,
                'Notelepon' => $request->Notelepon,
                'Lokasi' => $request->Lokasi,
                'Gambar' => $imagePath,
            ]);
        } else {
            $rumahsakit->update($request->except(['_token', 'submit', 'image']));
        }

        return redirect('/rumahsakit');
    }
    public function destroy($id)
    {
        $rumahsakit = Rumahsakit::find($id);
        $rumahsakit->delete();
        return redirect('/rumahsakit');
    }
}
