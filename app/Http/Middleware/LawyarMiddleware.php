<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LawyarMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()) {

            // admin role == 1
            // lawyer role == 0
            if(Auth::user()->role == "0" && Auth::user()->lawyerDetail->is_premium == "1") {
                return $next($request);
            } else {
                return redirect('/')->with("danger", "Login to access the lawyer info");
            }
        }else {
            return redirect('/login')->with("danger", "Login to access the lawyer info");
        }
    }
}
