<?php

namespace App\Http\Controllers;
use App\Models\informasidokter;
use Illuminate\Http\Request;

class informasidokterController extends Controller
{
    public function index(){
        $informasidokter =informasidokter::all();
        return view('informasidokter.index',compact(['informasidokter']));
    }
    

    public function create()
    {
        return view('informasidokter.create');
    }

    public function store(Request $request)
    {
       // dd($request->except(['_token','SUBMIT']));
       informasidokter::create($request->except(['_token','SUBMIT']));
       return redirect('/informasidokter');
    }

    public function edit($informasidokter)
    {
        $informasidokter = informasidokter::find($informasidokter);
        return view('informasidokter.edit',compact(['informasidokter']));
    }

    public function update($id, Request $request)

    {
        $informasidokter = informasidokter::find($id);
        $informasidokter->update($request->except(['_token','submit']));
        return redirect('/informasidokter');
    }

    public function destroy($id)

    {
        $informasidokter = informasidokter::find($id);
        $informasidokter->delete();
        return redirect('/informasidokter');
    }
}