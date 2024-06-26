<?php

namespace App\Http\Controllers;
use App\Models\poli;
use Illuminate\Http\Request;

class PoliController extends Controller

{
    public function index() {
        $poli = Poli::all();
        return view('poli.index', compact(['poli']));
    }

    public function create()
    {
        return view('poli.create');
    }
    public function store(Request $request)
    {
        Poli::create($request->except(['_token', 'submit']));
        return redirect('/poli');
    }
    public function edit($id)
    {
        $poli = Poli::find($id);
        return view('poli.edit', compact(['poli']));
    }
    public function update($id, request $request)
    {
        $poli = Poli::find($id);
        $poli->update($request->except(['_token', 'submit']));
        return redirect('/poli');
    }
    public function destroy($id)
    {
        $poli = Poli::find($id);
        $poli->delete();
        return redirect('/poli');
    }


}
