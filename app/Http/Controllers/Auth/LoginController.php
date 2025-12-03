<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }

    public function store(MakeLoginRequest $request): RedirectResponse
    {
        if ($request->attempt()) {
            back()->with(['message' => 'Login deu certo']);
        }

        return back()->with(['message' => 'Login não deu certo']);
    }
}
