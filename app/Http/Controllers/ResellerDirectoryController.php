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
//        dd(reseller::latest()->get());
        if (request()->ajax()) {

            return datatables()->of(reseller::where('status',1)->latest()->get())//->make(true);
                ->addColumn('link',function($data){
                  //  return '';
                   return '<a title="Edit" href="'.route("reseller.profile",$data->id).'" class="btn btn-primary btn-sm">Link</a>';
                })->rawColumns(['link'])->make(true);
        }
        $content['home'] = home::findOrFail(1);
        return view('front.reseller-directory')->with($content);
    }
}
