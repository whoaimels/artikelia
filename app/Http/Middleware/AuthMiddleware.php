<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request with optional role check.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role = null)
    {
        if (!Auth::check()) { //kalau di cek belum login
            return redirect()->route('login'); //maka dikirimkan ke halaman login
        }

       

        return $next($request);
    }
}


