<x-section>
    <x-slot name="title">
        ABOUT
    </x-slot>
    <x-slot name="sentence">
        ... or start reading about me
    </x-slot>

    <div class="w-full mt-4 mb-12 text-center animate">
        <x-ts-link fragment="about"
                icon="chevron-double-down"
                color="neutral"
                :personalize="[
                    'icon.size' =>  [
                        'replace' => [
                            'w-4' => 'w-12',
                            'h-4' => 'h-12',
                        ]
                    ],
                    'icon.base' => [
                        'append' => 'animate-bounce',
                    ],
                ]"
        />
    </div>

    <div class="w-full flex flex-col mx-auto items-center animate md:flex-row lg:max-w-screen-lg md:px-4">
        <x-draws.hello class="rounded-md mb-12 max-w-md"/>
        <div class="flex flex-col space-y-8 px-12 md:ml-6 md:w-1/2">
            <p>
                I have over 7+ years of experience in software development, focused on websites and applications,
                creating solutions mainly with <strong>PHP</strong> and <strong>Laravel</strong>.
            </p>
            <p>
                My degree in Computer Science and my relationship with technology since childhood have given me a passion for Linux, hardware, and the open-source world.
            </p>
        </div>
    </div>
</x-section>
