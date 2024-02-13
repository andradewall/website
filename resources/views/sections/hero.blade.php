<section class="max-w-screen-lg mx-auto h-[70dvh] flex justify-between items-center px-4">
    <div class="animation-fade-right">
        <h1 class="text-3xl font-bold mb-4">
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
    <x-draws.coding class="animation-fade-left" />
</section>
