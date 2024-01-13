@props([
    'iconName',
    'href',
    'text',
])

<x-ts-button href="{{ $href }}" color="orange" target="_blank">
    <x-dynamic-component component="icons.{{ $iconName }}" class="w-6 h-6 mr-2 text-white"/>
    {{ $text }}
</x-ts-button>
