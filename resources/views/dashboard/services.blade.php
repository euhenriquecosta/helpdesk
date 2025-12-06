@php
    $clients = [
        [
            'id' => '00001',
            'title' => 'André Costa',
            'amount' => 10000,
            'status' => 'active'

        ],
        [
            'id' => '00002',
            'title' => 'André Costa',
            'amount' => 15000,
            'status' => 'inactive'
        ],
        [
            'id' => '00003',
            'title' => 'André Costa',
            'amount' => 30000,
            'status' => 'active'
        ],
        [
            'id' => '00004',
            'title' => 'André Costa',
            'amount' => 2000,
            'status' => 'inactive'
        ],

    ];
@endphp


<x-layout.dashboard class="space-y-6" title="Serviços">
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold text-blue-dark">Serviços</h1>
        <x-button class="px-4">
            <x-lucide-plus class="size-4.5" />
            Novo
        </x-button>
    </div>

    <section class="border-dotted border border-gray-500 rounded-lg">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="px-4 py-4 text-start text-sm text-gray-400">Título</th>
                    <th class="px-4 py-4 text-start text-sm text-gray-400">Valor</th>
                    <th class="px-4 py-4 text-start text-sm text-gray-400">Status</th>
                    <th class="px-4 py-4 w-10"></th>
                </tr>
            </thead>
            <tbody>
                <!-- Ticket 1 -->
                @foreach ($clients as $client)
                    <tr class="border-t border-dotted border-gray-500">
                        <td class="px-4 py-4">
                            <span class="text-sm">Instalação de Rede</span>
                        </td>
                        <td class="px-4 py-4">
                            <span class="text-sm text-gray-200">
                                {{ sprintf('R$ %s', number_format($client['amount']/100, 2, ',', '.')) }}
                            </span>
                        </td>
                        <td class="px-4 py-4">
                            @switch($client['status'])
                                @case('active')
                                    <div class="flex items-center gap-1 py-1.5 px-3.5 rounded-full w-fit bg-feedback-done/20 text-feedback-done">
                                        <span class="text-xs">Ativo</span>
                                    </div>
                                    @break
                                @case('inactive')
                                    <div class="flex items-center gap-1 py-1.5 px-3.5 rounded-full w-fit bg-feedback-open/20 text-feedback-open">
                                        <span class="text-xs">Inativo</span>
                                    </div>
                                    @break
                                @default
                                    <div class="flex items-center gap-1 py-1.5 px-3.5 rounded-full w-fit bg-gray-300/20 text-gray-300">
                                        <span class="text-xs">?</span>
                                    </div>
                            @endswitch
                        </td>
                        <td class="flex items-center justify-end gap-3 px-4 py-4">
                            @switch($client['status'])
                                @case('active')
                                    <button class="flex items-center justify-start gap-1.5 w-22 p-2 cursor-pointer text-xs text-gray-300 hover:bg-gray-500/30 rounded">
                                        <x-lucide-ban class="size-3.5 shrink-0" />
                                        Desativar
                                    </button>
                                    @break
                                @case('inactive')
                                    <button class="flex items-center justify-start gap-1.5 w-22 p-2 cursor-pointer text-xs text-gray-300 hover:bg-gray-500/30 rounded">
                                        <x-lucide-circle-check class="size-3.5" />
                                        Reativar
                                    </button>
                                    @break
                            @endswitch



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
