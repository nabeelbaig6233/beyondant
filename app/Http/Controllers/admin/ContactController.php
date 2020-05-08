<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{

    public function index(){
        if (!in_array('viewContact',\Request::get('permission'))) {
            return redirect('admin');
        }
        $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)));
        return view('admin.'.request()->segment(2).'.list')->with($content);
    }

}
