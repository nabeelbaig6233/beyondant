<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EntrepreneursRequest;
use App\Mail\EntrepreneursMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EntrepreneursController extends Controller
{
    public function store(EntrepreneursRequest $request){
        $reseller_email=DB::table("entrepreneurs")->find(1);
        $request->request->remove("_token");
        Mail::to('alisyedamir2018@gmail.com')->send(new EntrepreneursMail($request->all()));
        DB::table("entrepreneurs")->insert($request->all());
        return redirect()->route('home')->with('success','Thank you for your submission! Please allow 5 to 7 business days for processing.');
    }
}
