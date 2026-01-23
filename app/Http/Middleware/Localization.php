<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $supported_languages = ['ar', 'fr'];
        $default_language = 'ar';

        if (Session::has('locale') && in_array(Session::has('locale'), $supported_languages)) {
            App::setLocale(Session::get('locale'));
            Session::put('locale', Session::get('locale'));
        } else {
            App::setLocale($default_language);
            Session::put('locale', 'ar');
        }
        return $next($request);
    }
}
