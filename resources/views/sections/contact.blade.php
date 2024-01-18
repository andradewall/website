<section class="max-w-screen-lg mx-auto py-16">
    <x-layouts.section-header>
        <x-slot name="title">
            CONTACT
        </x-slot>
        <x-slot name="sentence">
            Let's get in touch
        </x-slot>
    </x-layouts.section-header>

    <div class="h-[70dvh] space-y-6 flex flex-col justify-center items-center mt-8 animate">
        <div>
            You can chat with me on LinkedIn, see my projects on GitHub or e-mail me at contact@wllc.dev
        </div>
        <div class="flex space-x-8">
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
