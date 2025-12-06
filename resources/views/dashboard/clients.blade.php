@php
    $clients = [
        [
            'id' => '00001',
            'name' => 'André Costa',
            'email' => 'andrecosta@gmail.com',
        ],
        [
            'id' => '00002',
            'name' => 'André Costa',
            'email' => 'andrecosta@gmail.com',
        ],
        [
            'id' => '00003',
            'name' => 'André Costa',
            'email' => 'andrecosta@gmail.com',
        ],
        [
            'id' => '00004',
            'name' => 'André Costa',
            'email' => 'andrecosta@gmail.com',
        ],

    ];
@endphp


<x-layout.dashboard class="space-y-6" title="Clientes">
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold text-blue-dark">Clientes</h1>
        <x-button class="px-4">
            <x-lucide-plus class="size-4.5" />
            Novo
        </x-button>
    </div>

    <section class="border-dotted border border-gray-500 rounded-lg">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="px-4 py-4 text-start text-sm text-gray-400">Nome</th>
                    <th class="px-4 py-4 text-start text-sm text-gray-400">E-mail</th>
                    <th class="px-4 py-4 w-10"></th>
                </tr>
            </thead>
            <tbody>
                <!-- Ticket 1 -->
                @foreach ($clients as $client)
                    <tr class="border-t border-dotted border-gray-500">
                        <td class="px-4 py-4">
                            <div class="flex items-center gap-2">
                                 <x-tickets.avatar :name="$client['name']" />
                                 <span class="text-sm">{{ $client['name'] }}</span>
                             </div>
                        </td>
                        <td class="px-4 py-4">
                            <span class="text-sm text-gray-200">{{ $client['email'] }}</span>
                        </td>
                        <td class="px-4 py-4">
                            <button class="flex items-center justify-center cursor-pointer size-7 bg-gray-500 rounded">
                                <x-lucide-pen-line class="size-3.5" />
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-layout.dashboard>
