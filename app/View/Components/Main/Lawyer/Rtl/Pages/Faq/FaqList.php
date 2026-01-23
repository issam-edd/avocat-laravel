<?php

namespace App\View\Components\Main\Lawyer\Rtl\Pages\Faq;

use App\Models\Faq;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FaqList extends Component
{
    public $lawyer;
    public $user;
    public $faqs;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->lawyer = $data['lawyer'];
        $this->user = $data['user'];
        $this->faqs = Faq::where([
                            ['lawyer_id', $this->lawyer->lawyer_id ],
                            ['is_published', 1]
                        ])->paginate(9);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.lawyer.rtl.pages.faq.faq-list');
    }
}
