<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\ViewException;

class QuoteController extends Controller
{

    public function index(): View
    {
        return view('admin.quotes.index', [
            'quotes' => Quote::latest()->paginate(8)
        ]);
    }

    public function create(): View
    {
        return view('admin.quotes.create', [
            'movies' => Movie::all()
        ]);
    }

    public function store(StoreQuoteRequest $request)
    {
        // $path = request()->file('image')->store('images');
        // return "done:" . $path;


        $attributes = $request->validated();


        $attributes['image'] = request()->file('image')->store('images');
        // $attributes['movie_id'] = request('movie_id');

        $quotes = new Quote;

        $quotes->setTranslation('body', 'en', $attributes['body']['en'])
            ->setTranslation('body', 'ka', $attributes['body']['ka'])
            ->setAttribute('image', $attributes['image'])
            ->setAttribute('movie_id', $attributes['movie_id'])
            ->save();

        return redirect()->route('quotes.show');
    }

    public function destroy(Quote $quote): RedirectResponse
    {
        $quote->delete();

        return back();
    }

    public function edit(Quote $quote): View
    {
        return view('admin.quotes.edit', ['quote' => $quote, 'movies' => Movie::all()]);
    }



    public function update(UpdateQuoteRequest $request, Quote $quote): RedirectResponse
    {

        // ddd(request()->all());


        $attributes = $request->validated();

        if ($request->hasFile('image')) {
            $attributes['image'] = request()->file('image')->store('images');
        }

        $quote->setTranslation('body', 'en', $attributes['body']['en'])
            ->setTranslation('body', 'ka', $attributes['body']['ka'])
            ->setAttribute('movie_id', $attributes['movie_id']);

        if (isset($attributes['image'])) {
            $quote->setAttribute('image', $attributes['image']);
        }

        $quote->save();



        return redirect()->route('quotes.show');
    }
}
