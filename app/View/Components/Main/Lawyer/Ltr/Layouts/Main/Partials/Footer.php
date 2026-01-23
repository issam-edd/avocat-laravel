<?php

namespace App\View\Components\Main\Lawyer\Ltr\Layouts\Main\Partials;

use Closure;
use App\Models\Option;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use App\Models\Footer as ModelsFooter;

class Footer extends Component
{
    public $lawyer;
    public $user;
    public $options;
    public $main_options;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->lawyer = $data['lawyer'];
        $this->user = $data['user'];
        $this->options = ModelsFooter::where('lawyer_id', $this->lawyer->id)->get()->first();
        $this->main_options = Option::all()->pluck('option_value', 'option_name');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.lawyer.ltr.layouts.main.partials.footer');
    }
}
