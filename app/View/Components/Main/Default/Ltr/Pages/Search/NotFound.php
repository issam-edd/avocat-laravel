<?php

namespace App\View\Components\Main\Default\Ltr\Pages\Search;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NotFound extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.default.ltr.pages.search.not-found');
    }
}
