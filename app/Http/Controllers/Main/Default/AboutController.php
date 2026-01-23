<?php

namespace App\Http\Controllers\Main\Default;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {

        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';

        return view('main.default.' . $dir . '.pages.about');
    }
}
