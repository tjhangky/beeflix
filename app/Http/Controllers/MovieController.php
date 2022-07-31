<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{   
    public function index()
    {
        if(request()->has('genre')) {
            $genres = Genre::where('name', request('genre'))->first();
            $movies = Movie::where('genre_id', 'like', '%' .  $genres->id . '%')->get();
        } else {
            $genres = Genre::all();
            $movies = Movie::all();
        }
        return view('home', [
            'genres' => $genres,
            'movies' => $movies,
            'title' => ''
        ]);
    }

    public function show(Movie $movie)
    {  
        return view('movie', [
            'movie' => $movie,
            'episodes' => $movie->episodes()->paginate(3),
            'title' => $movie->title,
        ]);
    }
}