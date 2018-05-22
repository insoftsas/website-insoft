<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Laracasts\Flash\Flash;

class CheckRoles
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
        if ( auth()->user()->hasRoles( array_slice( func_get_args(), 2 ) )) {
            return $next($request);
        }

        Session::flash('error', 'No estas autorizado para realizar esta acción');
        return back()->withInput();
    }
}
