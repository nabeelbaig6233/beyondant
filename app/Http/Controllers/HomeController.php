<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\home;

class HomeController extends Controller
{
    public function index()
    {
        $home = home::findOrFail(1);
        return view('front.home')->with('home',$home);
    }

    public function subscribe(){
        return "HelloWorld";
    }

}
