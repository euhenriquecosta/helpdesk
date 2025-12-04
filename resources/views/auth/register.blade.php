<x-layout.app>
    <h1>Register</h1>

    @if (session('message'))
        <span>{{ session('message') }}</span>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="name" name="name" id="name" required>
        @error('name')
            <span>{{ $message }}</span>
        @enderror

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        @error('email')
            <span>{{ $message }}</span>
        @enderror

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        @error('password')
            <span>{{ $message }}</span>
        @enderror

        <button type="submit">Register</button>
    </form>
</x-layout.app>
