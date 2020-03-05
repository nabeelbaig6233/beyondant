<?php

namespace App\Http\Controllers;

use App\models\profile;

class ProfileController extends Controller
{
    public function index($id)
    {
        $content['record'] = profile::findOrFail($id);
        return view('front.profile',$content);
    }
}
