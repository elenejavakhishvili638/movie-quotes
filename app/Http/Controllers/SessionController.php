<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {

        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        return redirect('admin/movies');
    }
}
