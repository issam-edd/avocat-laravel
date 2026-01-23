<?php

namespace App\View\Components\Main\Lawyer\Rtl\Pages\Contact;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Map extends Component
{
    public $lawyer;
    public $user;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->lawyer = $data['lawyer'];
        $this->user = $data['user'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.lawyer.rtl.pages.contact.map');
    }
}
