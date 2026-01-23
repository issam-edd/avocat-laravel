<?php

namespace App\View\Components\Main\Default\Rtl\Pages\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogPost extends Component
{
    public $blog;
    public $lawyer;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        // $this->blog = $data['blog'];
        // $this->lawyer = $this->blog->user();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.default.rtl.pages.home.blog-post');
    }
}
