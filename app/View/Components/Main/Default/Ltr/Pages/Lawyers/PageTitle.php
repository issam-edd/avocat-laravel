<?php

namespace App\View\Components\Main\Default\Ltr\Pages\Lawyers;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageTitle extends Component
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
        return view('components.main.default.ltr.pages.lawyers.page-title');
    }
}
