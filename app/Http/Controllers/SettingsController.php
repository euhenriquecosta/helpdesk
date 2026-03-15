<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class SettingsController extends Controller
{
    public function index(Request $request)
    {
        $tab = $request->query('tab', 'profile');

        $data = [
            'user' => Auth::user(),
            'active' => $tab,
        ];

        if ($tab === 'users' && Auth::user()->role === 'admin') {
            $data['users'] = User::all();
        }

        return view('settings.index', $data);
    }

    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email,'.Auth::id()],
        ]);

        Auth::user()->update($validated);

        return redirect()->route('settings.index', ['tab' => 'profile'])
            ->with('status', 'Perfil atualizado com sucesso!');
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('settings.index', ['tab' => 'password'])
            ->with('status', 'Senha atualizada com sucesso!');
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = Auth::user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
