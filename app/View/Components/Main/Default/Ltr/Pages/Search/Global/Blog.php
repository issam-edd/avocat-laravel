<?php

namespace App\View\Components\Main\Default\Ltr\Pages\Search\Global;

use App\Models\LawyerDetail;
use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Blog extends Component
{
    public $blog;
    public $lawyer;
    public $created_at;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->blog = $data['blog'];
        $this->lawyer = LawyerDetail::where('lawyer_id', $this->blog->lawyer_id)->first();
        $this->created_at = $this->translate_created_at();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.default.ltr.pages.search.global.blog');
    }

    public function translate_created_at() {
        $created_at = $this->blog->created_at;
        return Carbon::parse($created_at)->translatedFormat('j F, Y');
    }
}
