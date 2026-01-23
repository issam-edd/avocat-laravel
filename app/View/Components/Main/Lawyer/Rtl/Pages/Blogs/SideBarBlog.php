<?php

namespace App\View\Components\Main\Lawyer\Rtl\Pages\Blogs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use Carbon\Carbon;

class SideBarBlog extends Component
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
        $this->lawyer = $data['lawyer'];
        $this->created_at = $this->translate_created_at();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.lawyer.rtl.pages.blogs.side-bar-blog');
    }

    public function translate_created_at() {
        $created_at = $this->blog->created_at;
        return Carbon::parse($created_at)->translatedFormat('j F, Y');
    }
}
