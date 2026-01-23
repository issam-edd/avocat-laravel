<?php

namespace App\Http\Controllers\Main\Lawyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LawyerDetail;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';

        $lawyer = LawyerDetail::where('slug', $request->slug)->first();

        if (is_null($lawyer)) {
            return abort(404);
        }


        return view('main.lawyer.' . $dir . '.pages.home', ['lawyer' => $lawyer, 'user' => $lawyer->user()]);
    }
}
