<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Usuario
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
        if(($path == "/" || $path == "categoria" || $path == "lamina" || $path == "usuario") && (Auth::check() && Auth::user()->tblusrotipo == 'USR'))
        {
            return redirect('/file');
        }
        return $next($request);
    }
}
