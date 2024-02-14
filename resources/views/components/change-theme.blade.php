<div x-on:click="darkTheme = !darkTheme" >

    <x-ts-icon name="sun"
            x-show="darkTheme"
            class="hover:text-morbius h-6 w-6 cursor-pointer text-neutral-600 transition duration-200 ease-in-out dark:text-neutral-400"
    />

    <x-ts-icon name="moon"
            x-show="!darkTheme"
            class="hover:text-morbius h-6 w-6 cursor-pointer text-neutral-600 transition duration-200 ease-in-out dark:text-neutral-400"
    />
</div>
