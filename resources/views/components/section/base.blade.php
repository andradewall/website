<section id="{{ Str::lower($title) }}" class="mx-auto flex h-dvh max-w-screen-lg flex-col px-4 py-16">
    <x-section.header>
        <x-slot name="title">
            {{ $title}}
        </x-slot>
        <x-slot name="sentence">
            {{ $sentence }}
        </x-slot>
    </x-section.header>

    {{ $slot }}
</section>