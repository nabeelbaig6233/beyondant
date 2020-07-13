<?php

namespace App\Http\Middleware;

use App\models\setting;
use Closure;

class allowguest
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
        $setting = setting::findOrFail(1);
        view()->share(
            'setting',$setting
        );

        return $next($request);
    }
}
