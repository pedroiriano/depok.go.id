<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckUser
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
        if (Auth::user()->email == "admin@depok.go.id") {
            return $next($request);
        }
        return redirect()->back()->with('flash_message','you are not allowed to access this');
    }
}
