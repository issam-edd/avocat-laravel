<?php

namespace App\Http\Controllers\Main\Default;

use App\Models\Faq;
use App\Models\LawyerDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';

        $data = [
            'faqs' => $this->faqs(),
            'lawyers' => $this->lawyers(),
            'blogs' => $this->blogs()
        ];

        // dd($data);

        return view('main.default.' . $dir . '.pages.home', $data);
    }

    public function lawyers() {
        $premium_lawyers = LawyerDetail::where('is_premium', 1)->limit(6)->get()->shuffle();
        $normal_lawyers = LawyerDetail::where('is_premium', 0)->limit(6 - $premium_lawyers->count())->get()->shuffle();

        // check if premium lawyers are enough
        // if($premium_lawyers->count() >= 6) {
        //     $lawyers = $premium_lawyers;
        // } else {
        //     $lawyers = $premium_lawyers->merge($normal_lawyers);
        // }

        $lawyers = $premium_lawyers->merge($normal_lawyers);

        return $lawyers;
    }

    public function faqs() {
        $premium_lawyers = LawyerDetail::where('is_premium', 1)->pluck('lawyer_id')->toArray();

        $faqs = Faq::inRandomOrder()->whereIn('lawyer_id', [...$premium_lawyers])->limit(3)->get();
        return $faqs;
    }

    public function blogs() {
        $premium_lawyers = LawyerDetail::where('is_premium', 1)->pluck('lawyer_id')->toArray();

        $blogs = DB::table('lawyer_blogs')->where([
            ['is_published', 1],
            ['is_approved', 1]
        ])->whereIn('lawyer_id', [...$premium_lawyers])->inRandomOrder()->limit(3)->get();

        return $blogs;
    }


    public function success() {
        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';
        return view('main.default.' . $dir . '.pages.faq-success');
    }

}
