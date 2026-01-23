<?php

namespace App\View\Components\Main\Default\Ltr\Pages\Home;

use App\Models\LawyerDetail;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LawyersList extends Component
{
    public $lawyers;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->lawyers = $data['lawyers'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.default.ltr.pages.home.lawyers-list');
    }
}
