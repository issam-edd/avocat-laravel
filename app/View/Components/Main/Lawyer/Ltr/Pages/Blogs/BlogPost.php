<?php

namespace App\View\Components\Main\Lawyer\Ltr\Pages\Blogs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogPost extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.lawyer.ltr.pages.blogs.blog-post');
    }
}
