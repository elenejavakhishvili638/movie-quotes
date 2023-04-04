<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Movie;
use Illuminate\Http\Request;

class AdminMovieController extends Controller
{
    public function index()
    {
        return view('admin.movies.index', [
            'movies' => Movie::latest()->paginate(8)
        ]);
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return back();
    }
}
