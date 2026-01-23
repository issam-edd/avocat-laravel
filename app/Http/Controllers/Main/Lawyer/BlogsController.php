<?php

namespace App\Http\Controllers\Main\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\LawyerBlog;
use App\Models\LawyerDetail;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(Request $request)
    {
        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';

        $lawyer = LawyerDetail::where('slug', $request->slug)->first();
        if (is_null($lawyer)) {
            return abort(404);
        }
        return view('main.lawyer.' . $dir . '.pages.blogs', ['lawyer' => $lawyer, 'user' => $lawyer->user()]);
    }


    public function show(Request $request)
    {
        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';
        $lawyer = LawyerDetail::where('slug', $request->slug)->first();

        if (is_null($lawyer)) {
            return abort(404);
        }

        $blog = LawyerBlog::where([
            ['id', $request->blog],
            ['lawyer_id', $lawyer->lawyer_id],
            ['is_published', 1],
            ['is_approved', 1]
        ])->first();

        if (is_null($blog)) {
            return abort(404);
        }

        return view('main.lawyer.' . $dir . '.pages.blog-details', ['lawyer' => $lawyer, 'user' => $lawyer->user(), 'title' => $blog->title, 'blog' => $blog]);
    }
}
