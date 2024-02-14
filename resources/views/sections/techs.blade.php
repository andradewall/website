<section class="bg-pattern dark:bg-pattern py-16 px-4">
    <div class="max-w-screen-lg mx-auto">
        <x-section.header>
            <x-slot name="title">
                TECHS
            </x-slot>
            <x-slot name="sentence">
                Stacks and tools I use
            </x-slot>
        </x-section.header>

        <div class="animate flex min-h-fit flex-col justify-center space-y-16 pt-8">
            <div class="space-y-4">
                <h4 class="font-semibold">
                    Stacks
                </h4>
                <ul class="flex flex-wrap gap-4">
                    <li><x-ts-badge lg text="PHP" color="orange" /></li>
                    <li><x-ts-badge lg text="Laravel" color="orange" /></li>
                    <li><x-ts-badge lg text="MySQL" color="orange" /></li>
                    <li><x-ts-badge lg text="Livewire" color="orange" /></li>
                    <li><x-ts-badge lg text="AlpineJS" color="orange" /></li>
                    <li><x-ts-badge lg text="TailwindCSS" color="orange" /></li>
                    <li><x-ts-badge lg text="PHPUnit" color="orange" /></li>
                    <li><x-ts-badge lg text="Pest" color="orange" /></li>
                </ul>
                <ul class="flex flex-wrap gap-4">
                    <li><x-ts-badge sm outline text="JavaScript" color="orange" /></li>
                    <li><x-ts-badge sm outline text="jQuery" color="orange" /></li>
                    <li><x-ts-badge sm outline text="NodeJS" color="orange" /></li>
                    <li><x-ts-badge sm outline text="React" color="orange" /></li>
                    <li><x-ts-badge sm outline text="Express" color="orange" /></li>
                    <li><x-ts-badge sm outline text="MongoDB" color="orange" /></li>
                </ul>
            </div>

            <div class="space-y-4">
                <h4 class="font-semibold">
                    Tools
                </h4>
                <ul class="flex flex-wrap gap-4">
                    <li><x-ts-badge sm outline text="Git" color="gray" /></li>
                    <li><x-ts-badge sm outline text="GitHub" color="gray" /></li>
                    <li><x-ts-badge sm outline text="Docker" color="gray" /></li>
                    <li><x-ts-badge sm outline text="PHPStorm" color="gray" /></li>
                    <li><x-ts-badge sm outline text="VS Code" color="gray" /></li>
                    <li><x-ts-badge sm outline text="Bruno" color="gray" /></li>
                    <li><x-ts-badge sm outline text="Postman" color="gray" /></li>
                    <li><x-ts-badge sm outline text="Obsidian" color="gray" /></li>
                    <li><x-ts-badge sm outline text="Notion" color="gray" /></li>
                    <li><x-ts-badge sm outline text="Excalidraw" color="gray" /></li>
                    <li><x-ts-badge sm outline text="Figma" color="gray" /></li>
                </ul>
            </div>
        </div>
    </div>
</section>
