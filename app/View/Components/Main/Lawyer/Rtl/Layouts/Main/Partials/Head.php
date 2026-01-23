<?php

namespace App\View\Components\Main\Lawyer\Rtl\Layouts\Main\Partials;

use Closure;
use App\Models\Option;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Head extends Component
{
    public $lawyer;
    public $user;
    public $title;
    public $main_options;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->lawyer = $data['lawyer'];
        $this->user = $data['user'];
        $this->title = $data['title'];
        $this->main_options = Option::all()->pluck('option_value', 'option_name');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.lawyer.rtl.layouts.main.partials.head');
    }
}
