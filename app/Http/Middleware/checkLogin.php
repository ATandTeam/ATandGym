<?php

namespace atandteam\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkLogin
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
        if (!Auth::check())
            return redirect(route('welcome'))->withErrors('Parece que no tienes permiso para entrar aquí.');
        return $next($request);
    }
}
