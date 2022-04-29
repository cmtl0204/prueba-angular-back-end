<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $data = Movie::get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->client()->associate(Client::find($request->input('clientId')));
        $movie->title = $request->input('title');
        $movie->director = $request->input('director');
        $movie->photo = $request->input('photo');
        $movie->price = $request->input('price');
        $movie->save();

        return response()->json($movie);
    }

    public function show(Movie $movie)
    {
        return response()->json($movie);
    }

    public function update(Request $request, Movie $movie)
    {
        $movie->client()->associate(Client::find($request->input('clientId')));
        $movie->title = $request->input('title');
        $movie->director = $request->input('director');
        $movie->photo = $request->input('photo');
        $movie->price = $request->input('price');
        $movie->save();

        return response()->json($movie);
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();

        return response()->json(['rta' => true]);
    }
}
