@php
    $first = explode(' ', $name)[0];
    $secound = explode(' ', $name)[1];

    $initials = "$first[0]$secound[0]";
@endphp

<div class="flex items-center justify-center w-7 h-7 bg-blue-dark text-white rounded-full text-xs">
    {{ $initials }}
</div>
