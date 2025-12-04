<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Handle Register Request
 *
 * @property-read string $name
 * @property-read string $email
 * @property-read string $password
 */
class MakeRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }

    public function attempt(): bool
    {
        $validated = $this->validated();

        if (User::where('email', $validated['email'])->exists()) {
            return false;
        }

        $user = User::create($validated);

        return $user->exists;
    }
}
