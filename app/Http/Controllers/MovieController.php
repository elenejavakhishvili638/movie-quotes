<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function get(Movie $movie)
    {
        return view('movies.list-page', [
            'movie' => $movie
        ]);
    }
}
