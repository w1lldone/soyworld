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
        $user = User::where('email', $request->email)->first();

        if ($user->is_activated) {
            return $next($request);
        }

        return redirect('/login')->with('warning', 'Akun anda belum aktif. Silahkan coba beberapa saat lagi.');
    }
}
