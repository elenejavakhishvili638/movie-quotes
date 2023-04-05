<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function create(): View
    {
        return view('sessions.create');
    }


    public function login(LoginRequest $request): RedirectResponse
    {

        $attributes = $request->validated();

        if (!auth()->attempt($attributes)) {
            abort(Response::HTTP_FORBIDDEN);
        }

        return redirect('dashboard');
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();

        return redirect("/");
    }
}
