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
        $content['profile'] = profile::count();
        $content['user'] = User::count();
        return view('admin.welcome',$content);
    }
}
