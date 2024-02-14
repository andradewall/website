<section class="max-w-screen-lg mx-auto">
    <x-section.header>
        <x-slot name="title">
            ABOUT
        </x-slot>
        <x-slot name="sentence">
            ... or start reading about me
        </x-slot>
    </x-section.header>

    <div class="w-full mt-4 mb-4 text-center animate">
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

    <div class="h-[70dvh] flex items-center animate px-4">
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
