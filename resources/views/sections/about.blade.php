<x-section>
    <x-slot name="title">
        ABOUT
    </x-slot>
    <x-slot name="sentence">
        ... or start reading about me
    </x-slot>

    <div class="animate mb-12 mt-4 w-full text-center">
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

    <div class="animate mx-auto flex w-full flex-col items-center md:flex-row md:px-4 lg:max-w-screen-lg">
        <x-draws.hello class="mb-12 max-w-md rounded-md"/>
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
