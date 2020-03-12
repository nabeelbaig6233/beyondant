<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\profile;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $content['profile'] = User::where('role_id',2)->count();
        $content['user'] = User::where('role_id','<>',2)->count();
        return view('admin.welcome',$content);
    }
}
