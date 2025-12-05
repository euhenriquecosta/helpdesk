@props(['title' => null])

<x-layout.app :title="$title">
    <div class="pt-3 h-full grid grid-cols-[200px_minmax(0,1fr)]">
        <aside>
            <header class="flex px-5 py-6 space-x-3">
                <img
                    src="/brand/logo.svg"
                    alt="Dashboard"
                    class="size-11 select-none pointer-events-none"
                />
                <span">
                    <h1 class="text-lg font-bold text-gray-600">{{ config('app.name') }}</h1>
                    <p class="text-xss uppercase text-blue-light">admin</p>
                </span>
            </header>

            <nav class="flex px-4 py-5 flex-col space-y-1">
                <x-nav-item tag="a" icon="clipboard-list" class="justify-start gap-3 p-3" route="tickets">
                    Chamados
                </x-nav-item>

                <x-nav-item tag="a" icon="users" class="justify-start gap-3 p-3" route="technicians">
                    Técnicos
                </x-nav-item>

                <x-nav-item tag="a" icon="briefcase-business" class="justify-start gap-3 p-3" route="clients">
                    Clientes
                </x-nav-item>

                <x-nav-item tag="a" icon="wrench" class="justify-start gap-3 p-3" route="services">
                    Serviços
                </x-nav-item>
            </nav>

            <footer>

            </footer>
        </aside>

        <main class="bg-white text-gray-100 rounded-tl-2xl px-12 py-13">
            {{ $slot }}
        </main>
    </div>
</x-layout.app>
