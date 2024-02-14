<x-section.base>
    <x-slot name="title">
            {{ $title}}
    </x-slot>
    <x-slot name="sentence">
        {{ $sentence }}
    </x-slot>
    
    {{ $slot }}
</x-section.base>
