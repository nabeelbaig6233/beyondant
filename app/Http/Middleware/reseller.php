<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class reseller
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
        if(Auth::guard('reseller')->user() && Auth::guard('reseller')->user()->status==1){
            return $next($request);
        }
        return redirect()->route('home')->with("error","Your Profile Is Under Process.");
    }
}
