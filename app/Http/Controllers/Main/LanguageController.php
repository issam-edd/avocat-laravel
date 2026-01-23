<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index($lang = 'ar') {
        if(in_array($lang, ['ar', 'fr'])) {
            app()->setLocale($lang);
            session()->put('locale', $lang);
        } else {
            app()->setLocale('ar');
            session()->put('locale', 'ar');
        }
        return redirect()->back();
    }
}
