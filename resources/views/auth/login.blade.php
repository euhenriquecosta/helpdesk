<x-layout.app>
    <h1>Login</h1>

    @if (session('message'))
        <span>{{ session('message') }}</span>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        @error('email')
            <span>{{ $message }}</span>
        @enderror

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        @error('password')
            <span>{{ $message }}</span>
        @enderror

        <button type="submit">Login</button>
    </form>
</x-layout.app>
