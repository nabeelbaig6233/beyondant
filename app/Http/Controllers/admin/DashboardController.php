<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\device;
use App\models\profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role_id===5){
            $where=[['parent_id','=', auth()->user()->id],['role_id',"=",2],["acc_type","=","personal"]];
            $content["employees"]=User::where($where)->count();
        }
        else if (auth()->user()->role_id===7){
            $where=[['user_id','=', auth()->user()->id]];
            $content["devices"]=device::where($where)->count();
        }
        else {
            $content['profile'] = User::where('role_id', 2)->count();
            $content['user'] = User::where('role_id', '<>', 2)->count();
        }
        return view('admin.welcome',$content);
    }
}
