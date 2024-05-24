<?php

namespace App\Http\Controllers;
use App\Models\Rumahsakit;
use Illuminate\Http\Request;

class LihatrumahsakitController extends Controller
{
    public function indexlihatrs() {
        $rumahsakit = Rumahsakit::all();
        return view('lihatrumahsakit.indexlihatrs', compact(['rumahsakit']));
    }
    public function store(Request $request)
    {
        $rumahsakit = Rumahsakit::all();
        return view('lihatrumahsakit.indexlihatrs', compact(['rumahsakit']));
    }
}
