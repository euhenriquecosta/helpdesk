@props([
    'tag' => 'button',
    'variant' => 'default',
])

@php
    $variants = [
        'base' => 'flex items-center justify-center h-10 w-full rounded-md text-sm',
        'default' => 'bg-gray-100',
        'ghost' => 'bg-gray-500 text-gray-200',
        'destructive' => 'bg-feedback-danger',
    ];

    $key = is_string($variant) && array_key_exists($variant, $variants)
        ? $variant
        : 'default';
@endphp

<{{ $tag }}
    {{ $attributes->class([$variants['base'], $variants[$key]]) }}
>
    {{ $slot }}
</{{ $tag }}>
