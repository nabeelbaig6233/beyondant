<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\models\reseller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $this->middleware('guest:reseller')->except('logout');
    }

    public function showResellerLoginForm()
    {
        return view('reseller.front.resellerlogin', ['url' => 'reseller']);
    }

    public function resellerLogin(Request $request)
    {
        $this->validate($request,[
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        $reseller=reseller::where('email','=',$request->get('email'))->first();
        if(!empty($reseller) && $reseller->status!=1){
            return redirect()->route('home')->with("error","Your Profile Is Under Process.");
        }
        if (Auth::guard('reseller')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect('/reseller/admin');
        }
        else {
            return $this->sendFailedLoginResponse($request);
        }
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
                return '/profile/'.Auth::user()->id;
                break;
            default:
                return 'admin';
        }
    }
}
