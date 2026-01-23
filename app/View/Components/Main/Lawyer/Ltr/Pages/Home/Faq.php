<?php

namespace App\View\Components\Main\Lawyer\Ltr\Pages\Home;

use App\Models\Faq as ModelsFaq;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Faq extends Component
{
    public $lawyer;
    public $user;
    public $faq_one;
    public $faq_two;
    public $faq_three;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->lawyer = $data['lawyer'];
        $this->user = $data['user'];
        $this->faq_one = ModelsFaq::find($this->lawyer->page->faq_id_one);
        $this->faq_two = ModelsFaq::find($this->lawyer->page->faq_id_two);
        $this->faq_three = ModelsFaq::find($this->lawyer->page->faq_id_three);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.lawyer.ltr.pages.home.faq');
    }
}
