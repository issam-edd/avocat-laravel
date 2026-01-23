<?php

namespace App\View\Components\Main\Lawyer\Rtl\Pages\Blogs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogContent extends Component
{
    public $lawyer;
    public $user;
    public $blog;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->lawyer = $data['lawyer'];
        $this->user = $data['user'];
        $this->blog = $data['blog'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.lawyer.rtl.pages.blogs.blog-content');
    }
}
