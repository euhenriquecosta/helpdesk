@php
    $variants = [
        'base' => 'flex items-center gap-1 py-1.5 px-2.5 rounded-full w-fit',
        'open' => 'bg-feedback-open/20 text-feedback-open',
        'in_progress' => 'bg-feedback-progress/20 text-feedback-progress',
        'closed' => 'bg-feedback-done/20 text-feedback-done',
    ];

    $labels = [
        'open' => 'Aberto',
        'in_progress' => 'Em atendimento',
        'closed' => 'Encerrado',
    ];

    $label = isset($status) ? $labels[$status] : 'open';
@endphp


<div {{ $attributes->class([$variants['base'], $variants[$status]]) }}>
    <x-lucide-circle-help class="size-4"/>
    <span class="text-sm">{{ $label }}</span>
</div>
