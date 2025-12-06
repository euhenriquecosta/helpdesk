@php
    $technicians = [
        [
            'id' => '00001',
            'name' => 'André Costa',
            'email' => 'andrecosta@gmail.com',
            'disponibility' => ['7', '8', '10', '14', '15'],
        ],
        [
            'id' => '00002',
            'name' => 'André Costa',
            'email' => 'andrecosta@gmail.com',
            'disponibility' => ['7', '8', '16'],
        ],
        [
            'id' => '00003',
            'name' => 'André Costa',
            'email' => 'andrecosta@gmail.com',
            'disponibility' => ['7', '8', '10', '14', '15', '16', '17', '18'],
        ],
        [
            'id' => '00004',
            'name' => 'André Costa',
            'email' => 'andrecosta@gmail.com',
            'disponibility' => ['7', '8', '10', '14', '15', '16'],
        ],

    ];
@endphp


<x-layout.dashboard class="space-y-6" title="Técnicos">
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold text-blue-dark">Técnicos</h1>
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
                    <th class="px-4 py-4 text-start text-sm text-gray-400">Disponibilidade</th>
                    <th class="px-4 py-4 w-10"></th>
                </tr>
            </thead>
            <tbody>
                <!-- Ticket 1 -->
                @foreach ($technicians as $technician)
                    <tr class="border-t border-dotted border-gray-500">
                        <td class="px-4 py-4">
                            <div class="flex items-center gap-2">
                                 <x-tickets.avatar :name="$technician['name']" />
                                 <span class="text-sm">{{ $technician['name'] }}</span>
                             </div>
                        </td>
                        <td class="px-4 py-4">
                            <span class="text-sm text-gray-200">{{ $technician['email'] }}</span>
                        </td>
                        <td class="flex flex-wrap gap-1 px-4 py-4">
                            @foreach ($technician['disponibility'] as $hour)
                                @php
                                    $showedBadges = 3
                                @endphp

                                @if ($loop->index < $showedBadges)
                                  <div class="py-2 px-2.5 rounded-full border border-gray-500 text-gray-400 text-xs w-fit">
                                      {{ sprintf('%02d:00', $hour) }}
                                  </div>
                                @endif

                                @if ($loop->last && $loop->index >= $showedBadges)
                                    <div class="py-2 px-2.5 rounded-full border border-gray-500 text-gray-400 text-xs w-fit">
                                        +{{ $loop->count - $showedBadges }}
                                    </div>
                                @endif
                            @endforeach
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
