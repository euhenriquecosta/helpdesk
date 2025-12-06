@php
    $tickets = [
        [
            'updated_at' => '2024-04-13T20:56:00.000000Z',
            'id' => '00001',
            'title' => 'Rede lenta',
            'description' => 'Instalação de Rede',
            'amount' => 18000,
            'client' => 'André Costa',
            'technicians' => 'Carlos Silva',
            'status' => 'open',
        ],
        [
            'updated_at' => '2024-04-13T20:56:00.000000Z',
            'id' => '00002',
            'title' => 'Rede lenta',
            'description' => 'Instalação de Rede',
            'amount' => 20000,
            'client' => 'André Costa',
            'technicians' => 'Carlos Silva',
            'status' => 'closed',

        ],
        [
            'updated_at' => '2024-04-13T20:56:00.000000Z',
            'id' => '00003',
            'title' => 'Rede lenta',
            'description' => 'Instalação de Rede',
            'amount' => 18000,
            'client' => 'André Costa',
            'technicians' => 'Carlos Silva',
            'status' => 'open',

        ],
        [
            'updated_at' => '2024-04-13T20:56:00.000000Z',
            'id' => '00004',
            'title' => 'Rede lenta',
            'description' => 'Instalação de Rede',
            'amount' => 18000,
            'client' => 'André Costa',
            'technicians' => 'Carlos Silva',
            'status' => 'in_progress',

        ],
        [
            'updated_at' => '2024-04-13T20:56:00.000000Z',
            'id' => '00005',
            'title' => 'Rede lenta',
            'description' => 'Instalação de Rede',
            'amount' => 18000,
            'client' => 'André Costa',
            'technicians' => 'Carlos Silva',
            'status' => 'closed',
        ],
    ];
@endphp

<section class="border-dotted border border-gray-500 rounded-lg">
    <table class="w-full">
        <thead>
            <tr>
                <th class="px-4 py-4 text-start text-sm text-gray-400">Atualizado em</th>
                <th class="px-4 py-4 text-start text-sm text-gray-400">ID</th>
                <th class="px-4 py-4 text-start text-sm text-gray-400">Título e Serviço</th>
                <th class="px-4 py-4 text-start text-sm text-gray-400">Valor total</th>
                <th class="px-4 py-4 text-start text-sm text-gray-400">Cliente</th>
                <th class="px-4 py-4 text-start text-sm text-gray-400">Técnico</th>
                <th class="px-4 py-4 text-start text-sm text-gray-400">Status</th>
                <th class="px-4 py-4 w-10"></th>
            </tr>
        </thead>
        <tbody>
            <!-- Ticket 1 -->
            @foreach ($tickets as $ticket)
                <tr class="border-t border-dotted border-gray-500">
                    <td class="px-4 py-4 text-sm">{{ \Carbon\Carbon::parse($ticket['updated_at'])->format('d/m/y H:i') }}</td>
                    <td class="px-4 py-4 text-sm">{{ $ticket['id'] }}</td>
                    <td class="px-4 py-4">
                        <div class="flex flex-col">
                            <span class="text-sm font-bold">{{ $ticket['title'] }}</span>
                            <span class="text-xs">{{ $ticket['description'] }}</span>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-sm">R$ {{ number_format($ticket['amount']/100, 2, ',', '.') }}</td>
                    <td class="px-4 py-4">
                        <div class="flex items-center gap-2">
                             <x-tickets.avatar :name="$ticket['client']" />
                             <span class="text-sm">{{ $ticket['client'] }}</span>
                         </div>
                    </td>
                    <td class="px-4 py-4">
                        <div class="flex items-center gap-2">
                            <x-tickets.avatar :name="$ticket['technicians']" />
                            <span class="text-sm">{{ $ticket['technicians'] }}</span>
                        </div>
                    </td>
                    <td class="px-4 py-4">
                        <x-tickets.status-badge :status="$ticket['status']" />
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
