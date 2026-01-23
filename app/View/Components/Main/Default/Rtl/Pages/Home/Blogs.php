<?php

namespace App\View\Components\Main\Default\Rtl\Pages\Home;

use App\Models\LawyerBlog;
use App\Models\LawyerDetail;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Blogs extends Component
{
    public $blogs;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->blogs = $data['blogs'];

        // $this->blogs = LawyerBlog::where()->limit(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.default.rtl.pages.home.blogs');
    }
}
