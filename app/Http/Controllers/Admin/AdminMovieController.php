<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminMovieRequest;
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

    public function create()
    {
        return view('admin.movies.create');
    }

    public function store(StoreAdminMovieRequest $request)
    {
        $attributes = $request->validated();

        Movie::create($attributes);

        return redirect('admin/movies');
    }
}