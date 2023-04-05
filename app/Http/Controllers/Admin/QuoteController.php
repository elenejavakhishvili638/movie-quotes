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

        Quote::create($attributes);

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

        $attributes['image'] = request()->file('image')->store('images');

        $quote->update($attributes);

        return redirect()->route('quotes.show');
    }
}
