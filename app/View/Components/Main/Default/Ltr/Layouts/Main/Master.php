<?php

namespace App\View\Components\Main\Default\Ltr\Layouts\Main;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Master extends Component
{
    public $lang;
    public $isRtl;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->lang = app()->getLocale();
        $this->isRtl = false;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.default.ltr.layouts.main.master');
    }
}
