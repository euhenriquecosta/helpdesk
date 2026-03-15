<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::defaults()],
            'role' => ['required', 'in:member,admin'],
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
        ]);

        return to_route('settings.index', ['tab' => 'users'])
            ->with('status', 'Usuário criado com sucesso!');
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        if ($user->id === auth()->id()) {
            return back()->with('status', 'Você não pode alterar sua própria função.');
        }

        $validated = $request->validate([
            'role' => ['required', 'in:member,admin'],
        ]);

        $user->update($validated);

        return back()->with('status', 'Função atualizada com sucesso!');
    }

    public function destroy(User $user): RedirectResponse
    {
        if ($user->id === auth()->id()) {
            return back()->with('status', 'Você não pode deletar sua própria conta por aqui.');
        }

        $user->delete();

        return back()->with('status', 'Usuário deletado com sucesso!');
    }
}
