@props([
    'iconName',
    'href',
    'text',
])

<div>
    <x-ts-button lg href="{{ $href }}" color="orange" target="_blank">
        <x-dynamic-component component="icons.{{ $iconName }}" class="w-6 h-6 mr-2 text-white"/>
        {{ $text }}
    </x-ts-button>
</div>
