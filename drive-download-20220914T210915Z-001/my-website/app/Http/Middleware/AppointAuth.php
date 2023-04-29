<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Http\Request;

class AppointAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if (session('hasAppointment')) {
            return $next($request);
        } else {
            return redirect('/appointment')->with(['error' => 'You have no appointment yet!']);
        }
    }
}
