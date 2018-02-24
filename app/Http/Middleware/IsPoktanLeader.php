<?php

namespace App\Http\Middleware;

use Closure;

class IsPoktanLeader
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
        if ($request->user()->isPoktanLeader()) {
            return $next($request);
        }

        return redirect('home')->with('danger', 'Maaf anda tidak bisa mengakses halaman tersebut');
    }
}
