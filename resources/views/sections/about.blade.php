<section>
    <div class="text-center">
        <x-layouts.section-header>
            <x-slot name="title">
                ABOUT
            </x-slot>
            <x-slot name="sentence">
                ... or start reading about me
            </x-slot>
        </x-layouts.section-header>

        <a href="#about">
            <x-icon name="chevron-double-down" class="w-full h-8 text-neutral-500 mt-4"/>
        </a>
    </div>

    <div class="h-[70dvh] flex items-center">
        <x-draws.hello class="w-1/2 pr-8 rounded-md"/>
        <div class="w-1/2 pl-8 flex flex-col space-y-4">
            <p>
                I have over 7+ years of experience in software development, focused on websites and applications,
                creating solutions mainly with <strong>PHP</strong> and <strong>Laravel</strong>.
            </p>
            <p>
                My degree in Computer Science and my relationship with technology since childhood have given me a passion for Linux, hardware, and the open-source world.
            </p>
        </div>
    </div>
</section>
