<?php

namespace App\Http\Controllers\Main\Default;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Option;

class ContactController extends Controller
{
    public function index() {

        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';

        $options = Option::all()->pluck('option_value', 'option_name');

        return view('main.default.' . $dir . '.pages.contact', ['options' => $options]);
    }
}
