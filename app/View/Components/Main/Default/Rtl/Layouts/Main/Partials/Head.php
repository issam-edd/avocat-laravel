<?php

namespace App\View\Components\Main\Default\Rtl\Layouts\Main\Partials;

use App\Models\Option;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Head extends Component
{

    public $siteweb_name_ar;
    public $options;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->options = Option::all()->pluck('option_value', 'option_name');
        $this->siteweb_name_ar = "محاموا مراكش";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.default.rtl.layouts.main.partials.head');
    }
}
