<x-layout.dashboard class="space-y-6" title="Chamados">
    <h1 class="text-2xl font-bold text-blue-dark">Chamados</h1>

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
                <tr class="border-t border-dotted border-gray-500">
                    <td class="px-4 py-4 text-sm">13/04/25 20:56</td>
                    <td class="px-4 py-4 text-sm">00003</td>
                    <td class="px-4 py-4">
                        <div class="flex flex-col">
                            <span class="text-sm font-bold">Rede lenta</span>
                            <span class="text-xs">Instalação de Rede</span>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-sm">R$ 180,00</td>
                    <td class="px-4 py-4">
                        <div class="flex items-center gap-2">
                            <div class="flex items-center justify-center w-7 h-7 bg-blue-dark text-white rounded-full text-xs">
                                AC
                            </div>
                            <span class="text-sm">André Costa</span>
                        </div>
                    </td>
                    <td class="px-4 py-4">
                        <div class="flex items-center gap-2">
                            <div class="flex items-center justify-center w-7 h-7 bg-blue-dark text-white rounded-full text-xs">
                                CS
                            </div>
                            <span class="text-sm">Carlos Silva</span>
                        </div>
                    </td>
                    <td class="px-4 py-4">
                        <div class="flex items-center gap-1 bg-feedback-open/20 text-feedback-open py-1.5 px-2.5 rounded-full w-fit">
                            <x-lucide-circle-help class="size-4"/>
                            <span class="text-sm">Aberto</span>
                        </div>
                    </td>
                    <td class="px-4 py-4">
                        <button class="flex items-center justify-center cursor-pointer size-7 bg-gray-500 rounded">
                            <x-lucide-pen-line class="size-3.5" />
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
</x-layout.dashboard>
