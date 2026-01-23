<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function store(Request $request) {

        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';

        $validated = $request->validate([
            'email' => 'required|email:strict|unique:emails,email|max:255',
        ]);

        Email::create([
            'email' => $request->email
        ]);

        return view('main.default.' . $dir . '.pages.newsletter-success');
    }
}
