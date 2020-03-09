<?php

namespace App\Http\Controllers;

use App\models\profile;

class ProfileController extends Controller
{
    public function index($id)
    {
        $content['record'] = profile::findOrFail($id);
        if (!empty($content['record']->afacebook)) {
            return redirect($content['record']->facebook);
        } elseif (!empty($content['record']->alinkedin)) {
            return redirect($content['record']->linkedin);
        } elseif (!empty($content['record']->ainstagram)) {
            return redirect($content['record']->instagram);
        } else {
            return view('front.profile',$content);
        }
    }

    public function vcards()
    {
        if(!empty(request()->action)) {
            $query = profile::findOrFail(request()->id);
            $vcardExport = new \App\VcardExport;
            $vcardExport->contactVcardExportService($query);
            exit;
        }
    }
}
