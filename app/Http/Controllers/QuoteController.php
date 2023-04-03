<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function get()
    {
        $quote = Quote::inRandomOrder()->first();

        return view('movies.main-page', [
            'quote' => $quote
        ]);
    }
}
