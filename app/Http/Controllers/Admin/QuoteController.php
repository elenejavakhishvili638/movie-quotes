<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{

    public function index()
    {
        return view('admin.quotes.index', [
            'quotes' => Quote::latest()->paginate(8)
        ]);
    }

    public function create()
    {
        return view('admin.quotes.create', [
            'movies' => Movie::all()
        ]);
    }

    public function store(StoreQuoteRequest $request)
    {
        // ddd(request()->all());
        $attributes = $request->validated();

        Quote::create($attributes);

        return redirect('admin/quotes');
    }
}
