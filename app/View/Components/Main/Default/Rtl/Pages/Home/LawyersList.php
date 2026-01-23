<?php

namespace App\View\Components\Main\Default\Rtl\Pages\Home;

use App\Models\LawyerDetail;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class LawyersList extends Component
{
    public $lawyers;
    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->lawyers = $data['lawyers'];
        // $premium_lawyers = LawyerDetail::where('is_premium', 1)->limit(6)->get()->shuffle();
        // $normal_lawyers = LawyerDetail::where('is_premium', 0)->limit(6 - $premium_lawyers->count())->get()->shuffle();

        // if($premium_lawyers->count() >= 6) {
        //     $this->lawyers = $premium_lawyers;
        // } else {
        //     $this->lawyers = $premium_lawyers->merge($normal_lawyers);
        // }


    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.default.rtl.pages.home.lawyers-list');
    }
}
