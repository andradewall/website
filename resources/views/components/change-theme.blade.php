<div x-on:click="darkTheme = !darkTheme" >

    <x-icon name="sun"
            x-show="darkTheme"
            class="w-6 h-6 text-neutral-600 dark:text-neutral-400 hover:text-marcelin transition duration-200 ease-in-out cursor-pointer"
    />

    <x-icon name="moon"
            x-show="!darkTheme"
            class="w-6 h-6 text-neutral-600 dark:text-neutral-400 hover:text-marcelin transition duration-200 ease-in-out cursor-pointer"
    />
</div>
