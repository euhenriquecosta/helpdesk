<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeRegisterRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index(): View
    {
        return view('auth.register');
    }

    public function store(MakeRegisterRequest $request): RedirectResponse
    {
        if ($request->attempt()) {
            return back()->with(['message' => 'Registro deu certo']);
        }

        return back()->with(['message' => 'Registro não deu certo']);
    }
}
