<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class CheckActivatedUser
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

        if (auth()->user()->is_activated) {
            return $next($request);
        }

        auth()->logout();
        return redirect('/login')->with('warning', 'Akun anda belum aktif. Silahkan hubungi administrator untuk mengaktifkan akun');
    }
}
