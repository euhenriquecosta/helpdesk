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
            return back()->with('success', 'Registro realizado com sucesso!');
        }

        return back()->with('error', 'Falha ao realizar o registro.');
    }
}
