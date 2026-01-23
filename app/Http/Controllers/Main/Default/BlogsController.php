<?php

namespace App\Http\Controllers\Main\Default;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LawyerBlog;
use App\Models\LawyerDetail;

class BlogsController extends Controller
{
    public function index() {

        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';

        $premium_lawyers = LawyerDetail::where('is_premium', 1)->pluck('lawyer_id')->toArray();


        $blogs = LawyerBlog::where([
            'is_published' => 1,
            'is_approved' => 1
            ])->whereIn('lawyer_id', [...$premium_lawyers])->paginate(9);

        // return response([ 'blogs' => $blogs ]);

        return view('main.default.' . $dir .'.pages.blogs', ['blogs' => $blogs]);
    }
}
