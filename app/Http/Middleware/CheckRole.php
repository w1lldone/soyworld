<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (!$request->user()->hasRole($role) && !$request->user()->isSuperadmin()) {
            return redirect('home')->with('danger', 'Maaf anda tidak bisa mengakses halaman tersebut');
        }
        return $next($request);
    }
}
