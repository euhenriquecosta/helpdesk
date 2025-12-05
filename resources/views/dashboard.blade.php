<x-layout.dashboard title="Dashboard">
    <span>Bem-vindo, {{ auth()->user()->name ?? auth()->user()->email }}!</span>
    <form method="POST" action="{{ route('logout') }}" class="inline">
        @csrf
        <button type="submit">Logout</button>
    </form>
</x-layout.dashboard>
