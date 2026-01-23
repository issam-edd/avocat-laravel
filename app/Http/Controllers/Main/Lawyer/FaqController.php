<?php

namespace App\Http\Controllers\Main\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\LawyerDetail;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function index(Request $request)
    {
        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';

        $lawyer = LawyerDetail::where('slug', $request->slug)->first();

        if (is_null($lawyer)) {
            return abort(404);
        }
        return view('main.lawyer.' . $dir . '.pages.faqs', ['lawyer' => $lawyer, 'user' => $lawyer->user()]);
    }

    public function show(Request $request, $slug, $id) {
        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';

        $lawyer = LawyerDetail::where('slug', $request->slug)->first();

        $faq = Faq::findOrFail($id);

        if (is_null($lawyer)) {
            return abort(404);
        }

        return view('main.lawyer.' . $dir . '.pages.faq', ['lawyer' => $lawyer, 'user' => $lawyer->user(), 'faq' => $faq]);
    }
}
