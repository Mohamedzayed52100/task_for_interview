<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class authradiology
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('RadiologyResult')) {
            return $next($request);
        } else {
            return redirect('/upload')->with(['error' => 'You must upload your radiology image first']);
        }
    }
}
