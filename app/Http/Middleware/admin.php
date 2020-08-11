<?php

namespace App\Http\Middleware;

use App\models\setting;
use Auth;
use Closure;

class admin
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
        if(!empty(Auth::guard("reseller")->user())){
            return redirect('/reseller/admin');
        }
        if (!empty(Auth::user()->id)) {
            $id = Auth::user()->id;
            $role = \DB::table('roles')->select('roles.name','roles.permission')->whereIn('roles.id',function ($query) use ($id) {
                $query->select('users.role_id')->from('users')->where('users.id',$id);
            })->first();
            $permissions = json_decode($role->permission);
            $request->attributes->add(['permission' => $permissions]);
        }
        if (!Auth::check()) {
            return redirect('login');
        }
        elseif (Auth::check() === true && $role->name == "customer") {
            return redirect('/profile/'.Auth::user()->id);
        }
        $setting = setting::findOrFail(1);
        view()->share('setting',$setting);
        return $next($request);
    }
}
