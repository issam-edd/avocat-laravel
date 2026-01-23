<?php

namespace App\View\Components\dashboard\lawyer;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;

class master extends Component
{
    public $isRtl;
    public $lang;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.lawyer.master');
    }
}
