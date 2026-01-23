<?php

namespace App\View\Components\Main\Default\Rtl\Pages\Blogs;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogPost extends Component
{
    public $blog;
    public $data;
    public $author;
    public $created_at;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->blog = $data['blog'];
        $this->author = $data['blog']->user;
        $this->created_at = $this->translate_created_at();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.default.rtl.pages.blogs.blog-post');
    }

    public function translate_created_at() {
        $created_at = $this->blog->created_at;
        return Carbon::parse($created_at)->translatedFormat('j F, Y');
    }
}
