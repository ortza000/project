<?php

namespace App\Http\Middleware;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class Teacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        if( Auth::check() && Auth::user()->isteacher() ) {
            return $next($request);
        } else {

            abort(403, 'Unauthorized action.');
        }

    }
}
