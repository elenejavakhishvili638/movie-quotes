<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MovieController extends Controller
{
    public function index(Movie $movie): View
    {
        return view('movies.list-page', [
            'movie' => $movie
        ]);
    }
}
