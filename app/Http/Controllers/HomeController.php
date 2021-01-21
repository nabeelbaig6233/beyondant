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
        // Nabeel
        $home = home::findOrFail(1);
        return view('front.home')->with('home',$home);
    }


    public function nfc_android(){
        $home = home::findOrFail(1);
        return view('front.nfc-android',["home"=>$home]);
    }

    public function nfc_business_cards(){
        $home = home::findOrFail(1);
        return view('front.business-cards',["home"=>$home]);
    }

    public function select_account(){
        request()->validate([
            "account_type"=>"required"
        ]);
        request()->session()->put("acc_type",request()->get("account_type"));
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
