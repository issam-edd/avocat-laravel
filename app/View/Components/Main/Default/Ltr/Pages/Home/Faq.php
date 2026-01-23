<?php

namespace App\View\Components\Main\Default\Ltr\Pages\Home;

use App\Models\Faq as ModelsFaq;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Faq extends Component
{
    public $lawyers;
    public $faqs;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {

        $this->faqs = $data['faqs'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.default.ltr.pages.home.faq');
    }
}
