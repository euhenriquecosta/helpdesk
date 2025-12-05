<x-layout.app>
    <x-slot:title>Login</x-slot:title>

    <div class="relative h-screen overflow-hidden">
      <img
        src="/brand/background.png"
        class="absolute inset-0 w-full h-full object-cover"
        alt="Fundo da marca"
      />

      <main class="absolute right-0 z-10 h-full">
          <div class="relative bg-white h-full w-screen rounded-t-2xl p-6 mt-8 sm:mt-4 sm:w-2xl sm:rounded-l-2xl sm:rounded-t-none sm:px-36 sm:py-12 space-y-8 justify-center">
            <img
                src="/brand/nav-header.svg"
                class="object-cover h-10 w-auto place-self-center"
            />

            <div class="space-y-3">
                <!--Card-->
                <x-card class="flex-col space-y-10">
                    <span class="text-xs text-gray-300">
                        <h1 class="text-lg text-gray-200 font-bold">Acesse o portal</h1>
                        Entre usando seu e-mail e senha cadastrados
                    </span>

                    <form method="POST" action="{{ route('login') }}" class="space-y-10">
                        @csrf

                        <div class="flex flex-col space-y-4">
                            <x-form.input
                                label='E-mail'
                                name='email'
                                type='email'
                                placeholder='exemplo@mail.com'
                                autocomplete='email'
                                required
                            />

                            <x-form.input
                                label='Senha'
                                name='password'
                                type='password'
                                placeholder='Digite sua senha...'
                                autocomplete='password'
                                required
                            />
                        </div>

                        <x-button type='submit'>Entrar</x-button>
                    </form>
                </x-card>

                <x-card class="flex-col space-y-6">
                    <span class="text-xs text-gray-300">
                        <h1 class="text-md text-gray-200 font-bold">Ainda não tem uma conta?</h1>
                        Cadastre agora mesmo
                    </span>

                    <x-button tag='a' href="{{ route('register') }}" variant="ghost">Criar conta</x-button>
                </x-card>
            </div>
        </div>
    </main>
</x-layout.app>
