<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movie = Movie::inRandomOrder()->first();
        return view('movies.main-page', [
            'movie' => $movie
        ]);
    }
}
