<x-ts-icon name="bars-3"
    class="hover:text-morbius block h-6 w-6 cursor-pointer text-neutral-600 transition duration-200 ease-in-out sm:hidden dark:text-neutral-400"
    x-on:click="$slideOpen('menu')" />

<x-ts-slide id="menu" left size="full"
    :personalize="[
        'wrapper.fifth' => [
            'replace' => [
                'dark:bg-dark-700' => 'dark:bg-neutral-700',
            ]
        ],
        'title.close' => [
            'replace' => [
                'text-secondary-300' => 'text-neutral-600 dark:text-neutral-400',
            ],
            'append' => 'hover:text-morbius dark:hover:text-morbius'
        ],
    ]">
    <ul class="flex flex-col space-y-8 uppercase">
        <x-navbar.link text="About" href="/" fragment="about"/>
        <x-navbar.link text="Techs" href="/" fragment="techs"/>
        <x-navbar.link text="Experience" href="/" fragment="experience"/>
        <x-navbar.link text="Contact" href="/" fragment="contact"/>
    </ul>
</x-ts-slide>