<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $roles)
    {
        if ($roles == 'admin' && auth()->user()->roles != 'admin') {
            abort(403);
        }
        if($roles == 'mahasiswa' && auth()->user()->roles != 'mahasiswa'){
            abort(403);
        }
        return $next($request);
    }
}
