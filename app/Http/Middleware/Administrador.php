<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Administrador
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
        $path = $request->path();
        if(($path == "/") && (Auth::check() && Auth::user()->tblusrotipo != 'USR'))
        {
            return redirect('/lamina');
        }
        return $next($request);
    }
}
