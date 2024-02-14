@props([
    'iconName',
    'href',
    'text',
])

<div>
    <x-ts-button lg href="{{ $href }}" color="orange" target="_blank">
        <x-dynamic-component component="icons.{{ $iconName }}" class="mr-2 h-6 w-6 text-white"/>
        {{ $text }}
    </x-ts-button>
</div>
