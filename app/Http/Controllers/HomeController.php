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

<<<<<<< HEAD
    public function subscribe(){
        return "HelloWorld";
    }

=======
    public function select_account(){
        request()->validate([
            "account_type"=>"required"
        ]);
        return view("auth.register",["type"=>request()->get("account_type")]);
    }
>>>>>>> 55a6f458b2b25aca5e3749b1c9e96179c12da190
}
