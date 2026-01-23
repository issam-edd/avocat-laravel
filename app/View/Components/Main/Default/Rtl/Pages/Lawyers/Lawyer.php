<?php

namespace App\View\Components\Main\Default\Rtl\Pages\Lawyers;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Lawyer extends Component
{
    public $data;
    public $lawyer;
    public $user;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->lawyer = $data['lawyer'];
        $this->user = User::findOrFail($this->lawyer->lawyer_id);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.default.rtl.pages.lawyers.lawyer');
    }
}
