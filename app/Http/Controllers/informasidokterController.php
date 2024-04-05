<?php

namespace App\Http\Controllers;
use App\Models\informasidokter;
use Illuminate\Http\Request;

class informasidokterController extends Controller
{
    function index(){
        $informasidokter =informasidokter::all();
        return view('informasidokter.index',compact(['informasidokter']));
    }
    

    public function create()
    {
        return view('informasidokter.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
       informasidokter::create($request->except0(['_token','submit']));
    }
}