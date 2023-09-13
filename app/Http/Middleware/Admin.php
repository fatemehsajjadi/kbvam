<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if (!Auth::check()) {
            return redirect('/paneladmin/login');
        }
        elseif (Auth::user()->role_id < 1) {
            abort(404);
        } else {
            return $next($request);
        }

        return $next($request);
    }
}
