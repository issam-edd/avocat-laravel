<?php

namespace App\View\Components\Main\Default\Rtl\Pages\Lawyers;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageTitleSearch extends Component
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
        return view('components.main.default.rtl.pages.lawyers.page-title-search');
    }
}
