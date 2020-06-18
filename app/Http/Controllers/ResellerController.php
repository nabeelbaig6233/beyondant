<?php

namespace App\Http\Controllers;

use App\models\home;
use App\models\reseller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ResellerForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResellerMail;

class ResellerController extends Controller
{
    public function index(ResellerForm $request)
    {
        $reseller_email = DB::table('setting')->where('id',1)->first()->reseller_email;
        $request->request->remove('_token');
        DB::table('reseller')->insert($request->all());
        Mail::to($reseller_email)->send(new ResellerMail($request));
        return redirect()->route('home')->with('success','Thank you for your submission! Please allow 5 to 7 business days for processing.');
    }

    public function profile($id){
        $reseller=reseller::find($id);
        if(!empty($reseller)) {
            return view('reseller.front.profile', ["reseller" => $reseller]);
        }
        else{
            return redirect()->route('home');
        }
    }

}
