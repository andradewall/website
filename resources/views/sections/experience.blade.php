<section class="max-w-screen-lg mx-auto py-16">
    <x-layouts.section-header>
        <x-slot name="title">
            EXPERIENCE
        </x-slot>
        <x-slot name="sentence">
            Projects and companies I've worked with
        </x-slot>
    </x-layouts.section-header>

    <div class="w-full h-[70dvh] mx-auto pt-12 grid grid-cols-[1fr_3px_1fr] animate">

        <x-timeline.blank />

        <x-timeline.present />

        <x-timeline.experiences>
            <x-timeline.experience>
                <x-slot name="position">
                    Open-source Community
                </x-slot>
                <x-slot name="description">
                    Contributing to open-source projects, such as
                    <x-ts-link href="https://tallstackui.com"
                            text="TallStackUI"
                            icon="arrow-up-right"
                            position="right"
                            blank />
                </x-slot>
            </x-timeline.experience>

            <br />

            <x-timeline.experience>
                <x-slot name="position">
                    Freelancer
                </x-slot>
                <x-slot name="description">
                    APIs, applications and website development using Laravel as PHP framework and MySQL
                </x-slot>
            </x-timeline.experience>
        </x-timeline.experiences>

        <x-timeline.milestone>JAN 2023 - NOWADAYS</x-timeline.milestone>

        <x-timeline.experiences>
            <x-timeline.experience>
                <x-slot name="position">
                    3º Sergeant
                </x-slot>
                <x-slot name="company" href="https://www.ime.eb.mil.br/en/">
                    Military Institute of Engineering
                </x-slot>
                <x-slot name="description">
                    I worked in all phases of systems and website development, such as the Institute Admissions
                    Competition System and the Online Exam Correction System
                </x-slot>
            </x-timeline.experience>
        </x-timeline.experiences>

        <x-timeline.milestone>MAR 2016 - JAN 2023</x-timeline.milestone>

        <x-timeline.blank></x-timeline.blank>

    </div>
</section>
