<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckDashboard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->role == "1") {
            return redirect('/admin')->with("message", "لقد قمت بتسجيل الدخول بنجاح");
        } else {
            if(Auth::user()->role == "0" &&  Auth::user()->lawyerDetail->is_premium == "1")
            return redirect('/lawyer')->with("message", "لقد قمت بتسجيل الدخول بنجاح");
        }
        // return $next($request);
    }
}
