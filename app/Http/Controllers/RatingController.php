<?php

namespace App\Http\Controllers;
use App\Models\rating;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexrating() {
        $rating = rating::all();
        return view('rating.indexrating', compact(['rating']));
    }

    public function create()
    {
        return view('rating.createrating');
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'star_rating' => 'required|integer|min:1|max:5',
            'ulasan' => 'required',
        ]);

        $rating = Rating::Create([
            'user_id' => $request->user_id, 
            'star_rating' => $request->star_rating,
            'ulasan' => $request->ulasan,
        ]);
        // rating::create($request->except(['_token', 'submit']));
        return redirect('/rating');
    }
    public function edit($id)
    {
        $rating = rating::find($id);
        return view('rating.editrating', compact(['rating']));
    }
    public function update($id, request $request)
    {
        $rating = rating::find($id);
        $rating->update($request->except(['_token', 'submit']));
        return redirect('/rating');
    }
    public function destroy($id)
    {
        $rating = rating::find($id);
        $rating->delete();
        return redirect('/rating');
    }

}
