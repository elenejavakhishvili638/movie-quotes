<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(): View
    {
        return view('admin.movies.index', [
            'movies' => Movie::latest()->paginate(8)
        ]);
    }

    public function destroy(Movie $movie): RedirectResponse
    {
        $movie->delete();
        return back();
    }

    public function create(): View
    {
        return view('admin.movies.create');
    }

    public function store(StoreMovieRequest $request): RedirectResponse
    {
        $attributes = $request->validated();

        Movie::create($attributes);

        return redirect()->route('movies.show');
    }


    public function edit(Movie $movie): View
    {
        return view('admin.movies.edit', ['movie' => $movie]);
    }

    public function update(StoreMovieRequest $request, Movie $movie): RedirectResponse
    {
        $attributes = $request->validated();

        $movie->update($attributes);

        return redirect()->route('movies.show');
    }
}
