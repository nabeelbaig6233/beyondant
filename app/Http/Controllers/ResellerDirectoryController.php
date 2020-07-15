<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\models\home;
use App\models\reseller;
use Illuminate\Http\Request;

class ResellerDirectoryController extends Controller
{
    //
    public function index(){
        if (request()->ajax()) {
            return datatables()->of(reseller::latest()->get())->make(true);
        }
        $content['home'] = home::findOrFail(1);
        return view('front.reseller-directory')->with($content);
    }
}
