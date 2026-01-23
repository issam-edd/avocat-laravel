<?php

namespace App\View\Components\Main\Lawyer\Rtl\Pages\Blogs;

use App\Models\LawyerBlog;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogsList extends Component
{
    public $lawyer;
    public $user;
    public $blogs;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->lawyer = $data['lawyer'];
        $this->user = $data['user'];
        $this->blogs = LawyerBlog::where([
                            ['lawyer_id', $this->lawyer->lawyer_id ],
                            ['is_published', 1],
                            ['is_approved', 1]
                        ])->paginate(9);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.lawyer.rtl.pages.blogs.blogs-list');
    }
}
