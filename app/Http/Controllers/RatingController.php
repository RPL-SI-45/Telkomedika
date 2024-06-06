<?php

namespace App\Http\Controllers;
use App\Models\Rating;
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
        $rating = Rating::all();
        return view('rating.indexrating', compact(['rating']));
        }

    public function indexratingadmin() {
        $rating = Rating::all();
        return view('rating.indexratingadmin', compact(['rating']));
        }

    public function indexedit() {
        $user = Auth::user();
        $rating = Rating::where('user_id', $user->id)->get();

        return view('rating.indexedit', compact('rating'));
    }

    public function create()
    {
        return view('rating.createrating');
    }

    public function store(Request $request)
    {

    // Validate the incoming request data
    $request->validate([
        'star_rating' => 'required|integer|min:1|max:5',
        'ulasan' => 'required',
    ]);


    $user = Auth::user();

    $rating = Rating::create([
        'user_id' => $user->id,
        'name' => $user->name,
        'star_rating' => $request->star_rating,
        'ulasan' => $request->ulasan,
    ]);
    return redirect('/rating');
    }

    public function edit($id)
    {
        $rating = Rating::find($id);
        return view('rating.editrating', compact(['rating']));
    }
    public function update($id, request $request)
    {
        $request->validate([
            'star_rating' => 'required|integer|min:1|max:5',
            'ulasan' => 'required',
        ]);
        $rating = Rating::find($id);
        $rating->update($request->except(['_token', 'submit']));

        return redirect('/rating');
    }
    public function destroy($id)
    {
        $rating = Rating::find($id);
        $rating->delete();
        return redirect('/ratingedit');
    }

}
