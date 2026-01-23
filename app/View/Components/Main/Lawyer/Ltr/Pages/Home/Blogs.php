<?php

namespace App\View\Components\Main\Lawyer\Ltr\Pages\Home;

use Closure;
use App\Models\LawyerBlog;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Blogs extends Component
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
        ])->latest()->limit(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.lawyer.ltr.pages.home.blogs');
    }
}
