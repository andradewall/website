<section id="{{ Str::lower($title) }}" class="mx-auto flex min-h-fit flex-col py-16">
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