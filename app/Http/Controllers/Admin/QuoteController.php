<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuoteRequest;
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

        return redirect('admin/quotes');
    }

    public function destroy(Quote $quote): RedirectResponse
    {
        $quote->delete();

        return back();
    }
}
