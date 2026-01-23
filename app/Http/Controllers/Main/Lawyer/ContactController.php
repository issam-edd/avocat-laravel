<?php

namespace App\Http\Controllers\Main\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\LawyerDetail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';

        $lawyer = LawyerDetail::where('slug', $request->slug)->first();

        if (is_null($lawyer)) {
            return abort(404);
        }
        return view('main.lawyer.' . $dir . '.pages.contact', ['lawyer' => $lawyer, 'user' => $lawyer->user()]);
    }
}
