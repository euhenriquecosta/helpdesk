<x-layout.app>
    <x-slot:title>Login</x-slot:title>

    <div class="relative h-screen overflow-hidden">
      <img
        src="/brand/background.png"
        class="absolute inset-0 w-full h-full object-cover"
        alt="Fundo da marca"
      />
      <!-- Seu conteúdo aqui -->
      <main class="absolute right-0 z-10 h-full">
          <div class="relative bg-white h-full mt-4 rounded-l-2xl min-w-2xl px-36 py-12 space-y-8 justify-center">
            <img
                src="/brand/nav-header.svg"
                class="object-cover h-10 w-auto place-self-center"
            />

            <div>

            <!--Card-->
            <x-card class="flex-col space-y-10">
                <span class="text-xs text-gray-300">
                    <h1 class="text-lg text-gray-200 font-bold">Acesse o portal</h1>
                    Entre usando seu e-mail e senha cadastrados
                </span>

                <form method="POST" action="{{ route('login') }}" class="space-y-10">
                    @csrf

                    <div class="flex flex-col space-y-4">
                        <div class="group">
                            <label for="email" class="uppercase text-gray-300 group-focus-within:text-indigo-500 transition-colors text-xss block">E-mail</label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                placeholder="exemplo@mail.com"
                                class="h-10 w-full text-sm text-gray-200
                                       border-0 border-b border-gray-500
                                       placeholder:text-gray-400 placeholder:text-sm
                                       focus:outline-none focus:border-indigo-500 focus:border-b-2 transition-colors"
                            />
                            @error('email')
                                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="group">
                            <label for="password" class="uppercase text-gray-300 group-focus-within:text-indigo-500 transition-colors text-xss block">Senha</label>
                            <input type="password" name="password" id="password" placeholder="Digite sua senha..."     class="h-10 w-full text-sm text-gray-200
                                   border-0 border-b border-gray-500
                                   placeholder:text-gray-400 placeholder:text-sm
                                   focus:outline-none focus:border-indigo-500 focus:border-b-2 transition-colors" />
                            @error('password')
                                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <button type="submit" class="bg-gray-100 h-10 w-full rounded-md text-sm">Entrar</button>
                </form>
            </x-card>

            </div>
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
