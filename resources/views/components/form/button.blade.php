@props([
    'type' => 'submit',
    'variant' => 'default',
])

@php

@endphp


<button type="submit" {{ $attributes->class(['bg-gray-100 h-10 w-full rounded-md text-sm']) }}>{{ $slot }}</button>
