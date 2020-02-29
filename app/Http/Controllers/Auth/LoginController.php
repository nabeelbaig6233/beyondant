<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo() {

        if (!empty(Auth::user()->id)) {
            $id = Auth::user()->id;
            $role = \DB::table('roles')->select('roles.name')->whereIn('roles.id',function ($query) use ($id) {
                $query->select('users.role_id')->from('users')->where('users.id',$id);
            })->first()->name;
        }
//        Check User Roles
        switch ($role) {
            case 'customer':
                return '/profile';
                break;
            default:
                return 'admin';
        }
    }
}
