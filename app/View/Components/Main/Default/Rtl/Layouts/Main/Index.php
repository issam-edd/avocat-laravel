<?php

namespace App\View\Components\Main\Default\Rtl\Layouts\Main;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\View\Component;

class Index extends Component
{
    public $isRtl;
    public $lang;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->lang = App::getLocale();
        $this->isRtl = true;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.default.rtl.layouts.main.index');
    }
}
