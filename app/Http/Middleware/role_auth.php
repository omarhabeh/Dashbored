<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class role_auth
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
        if (Auth::check() && Auth::user()->Roles()=="admin"){
        return $next($request);
        }
        if (Auth::check() && Auth::user()->Roles()=="manager"){
            return redirect('/managerview');
        }
        if (Auth::check() && Auth::user()->Roles()=="User"){
            return redirect()->route('UserDashbored');
        }
        return redirect('/login');

    }
}
