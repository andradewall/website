<?php

namespace App\View\Components\Navbar;

use Illuminate\Contracts\View\View;

class Link extends \TallStackUi\View\Components\Link
{
    public function __construct(
        public ?string $text,
        public ?string $href,
        public ?string $color = null,
        public ?string $lg = null,
        public ?string $fragment = null,
    ) {
        if (is_null($color)) {
            $color = 'neutral';
        }

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
            'marcelin' => 'text-marcelin-600 dark:text-marcelin hover:text-marcelin-800 transition duration-200 ease-in-out',
            'neutral'  => 'text-neutral-600 dark:text-neutral-400 hover:text-marcelin transition duration-200 ease-in-out',
        ];
    }

    public function blade(): View
    {
        return view('tallstack-ui::components.link');
    }
}
