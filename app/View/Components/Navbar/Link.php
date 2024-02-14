<?php

namespace App\View\Components\Navbar;

use Illuminate\Contracts\View\View;

class Link extends \TallStackUi\View\Components\Link
{
    public function __construct(
        public ?string $text,
        public ?string $href,
        public ?string $color = 'neutral',
        public ?string $lg = null,
        public ?string $fragment = null,
    ) {
        parent::__construct(
            text: $text,
            href: $href,
            color: $color,
            lg: $lg,
            fragment: $fragment,
        );
    }

    /**
     * @return array<string, string>
     */
    public function textColor(): array
    {
        return [
            'orange'  => 'text-orange-600 dark:text-orange-400 hover:text-orange-800 transition duration-200 ease-in-out',
            'neutral' => 'hover:text-morbius dark:hover:text-morbius text-neutral-600 transition duration-200 ease-in-out dark:text-neutral-400',
        ];
    }

    public function blade(): View
    {
        return view('tallstack-ui::components.link');
    }
}
