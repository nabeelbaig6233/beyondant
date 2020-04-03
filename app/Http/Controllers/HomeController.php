<?php

namespace App\Http\Controllers;

use App\models\subscriber;
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


    public function select_account(){
        request()->validate([
            "account_type"=>"required"
        ]);
        return view("auth.register",["type"=>request()->get("account_type")]);
    }

    public function subscribe(){
        request()->validate([
            "email"=>"required|email|unique:subscribers,email",
        ]);
        //add subscriber to database
        subscriber::create([
            "email"=>request()->get("email")
        ]);
        return redirect()->route("home")->with("subscribed","Now you will be notified for the latest activities");
    }


}
