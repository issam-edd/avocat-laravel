<?php

namespace App\View\Components\Main\Lawyer\Ltr\Layouts\Main;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Index extends Component
{
    public $lawyer;
    public $user;
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->lawyer = $data['lawyer'];
        $this->user = $data['user'];
        $this->title = $data['title'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.lawyer.ltr.layouts.main.index');
    }
}
