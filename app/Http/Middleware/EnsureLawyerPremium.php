<?php

namespace App\Http\Middleware;

use App\Models\LawyerDetail;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureLawyerPremium
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $lawyer = LawyerDetail::where('slug', $request->slug)->first();

        if (is_null($lawyer)) {
            return abort(404);
        }

        if (!$lawyer->is_premium) {
            return abort(404);
        }

        return $next($request);
    }
}
