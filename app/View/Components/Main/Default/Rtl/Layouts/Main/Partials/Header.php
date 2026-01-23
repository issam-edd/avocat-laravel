<?php

namespace App\View\Components\Main\Default\Rtl\Layouts\Main\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Header extends Component
{
    public $is_admin = false;
    public $is_lawyer = false;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {

        if(Auth::check()) {
            $this->is_admin = Auth::user()->role === 1;
            $this->is_lawyer = Auth::user()->role === 0;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.default.rtl.layouts.main.partials.header');
    }
}
