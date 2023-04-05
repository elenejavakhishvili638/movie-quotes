<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(LoginRequest $request)
    {

        $attributes = $request->validated();

        if (!auth()->attempt($attributes)) {
            abort(Response::HTTP_FORBIDDEN);
        }

        return redirect('admin/movies');
    }
}
