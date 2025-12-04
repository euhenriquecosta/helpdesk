<x-layout.app>
    <x-slot:title>Login</x-slot:title>

    <div class="relative h-screen overflow-hidden">
      <img
        src="/brand/background.png"
        class="absolute inset-0 w-full h-full object-cover"
        alt="Fundo da marca"
      />
      <!-- Seu conteúdo aqui -->
      <main class="relative z-10 h-full">
          <div class="flex bg-white h-full mt-4 rounded-l-2xl min-w-2xl place-self-end px-36 py-12 justify-center">
              <img
                  src="/brand/nav-header.svg"
                  class="object-cover h-10 w-auto"
              />

              <!--Card-->

          </div>
      </main>
    </div>


    <!--<h1>Login</h1>

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
    </form>-->
</x-layout.app>
