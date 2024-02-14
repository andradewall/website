<section class="max-w-screen-lg mx-auto py-16 h-dvh flex flex-col">
    <x-layouts.section-header>
        <x-slot name="title">
            CONTACT
        </x-slot>
        <x-slot name="sentence">
            Let's get in touch
        </x-slot>
    </x-layouts.section-header>

    <div class=" space-y-6 justify-center items-center mt-8 animate px-4 flex-grow flex flex-col">
        <div class="py-12 w-1/2 text-wrap text-center">
            You can chat with me on LinkedIn, see my projects on GitHub or e-mail me at <x-ts-link href="mailto:contact@wllc.dev">contact@wllc.dev</x-ts-link>
        </div>
        <div class="flex flex-grow flex-col items-center justify-center space-y-16 lg:flex-row lg:space-x-8 lg:space-y-0 xl:space-x-16">
            <x-button text="LINKEDIN"
                      icon-name="linkedin"
                      href="https://www.linkedin.com/in/wllc-dev/" />

            <x-button text="GITHUB"
                      icon-name="github"
                      href="https://github.com/andradewall" />

            <x-button text="E-MAIL"
                      icon-name="mail"
                      href="mailto:contact@wllc.dev" />
        </div>
    </div>
</section>
