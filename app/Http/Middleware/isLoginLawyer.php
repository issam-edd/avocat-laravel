<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class isLoginLawyer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(Auth::check()) {

        //     // admin role == 1
        //     // lawyer role == 0
            if(Auth::check() && Auth::user()->role == "0"){
                return redirect("/lawyer");
            }else{
                return $next($request);
            }
        // }
    }
}
