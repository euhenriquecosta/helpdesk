@props([
    'tag' => 'button',
    'variant' => 'default',
])

@php
    $variants = [
        'base' => 'flex gap-2 items-center justify-center h-10 w-full rounded-md text-sm cursor-pointer',
        'default' => 'bg-gray-100',
        'ghost' => 'bg-gray-500 text-gray-200',
        'destructive' => 'bg-feedback-danger',
    ];

    $key = is_string($variant) && array_key_exists($variant, $variants)
        ? $variant
        : 'default';
@endphp

<{{ $tag }}
    {{ $attributes->merge(['class' => $variants['base'] . ' ' . $variants[$key]]) }}
>
    {{ $slot }}
</{{ $tag }}>
