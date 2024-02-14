<section class="mx-auto flex flex-col items-center justify-between px-4 sm:h-[60dvh] sm:flex-row-reverse lg:max-w-screen-lg">
    <x-draws.coding class="animation-fade-left my-8" />
    <div class="animation-fade-right my-8">
        <h1 class="mb-4 text-3xl font-bold">
            Hello, I'm Wallace Andrade
        </h1>
        <p>
            A full-stack web developer from Brazil 🇧🇷
            <br />who loves solving problems with PHP and coffee ☕
        </p>
        <div class="mt-4">
            <x-ts-button text="GET RESUME"
                         icon="arrow-down-tray"
                         position="left"
                         color="orange"
                         href="{{ route('resume') }}"
                         :personalize="[
                             'wrapper.class' => [
                                 'append' => 'hover:scale-105 active:scale-100',
                             ],
                         ]"
                         lg />
        </div>
    </div>
</section>
