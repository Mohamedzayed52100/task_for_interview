<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VaccineAuth
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
        if (session('hasVaccine')) {
           return $next($request);
        } else {
        return redirect('/registerVaccine')->with(['error' => 'You have no vaccine appointment yet!']);
        }
    }
}
