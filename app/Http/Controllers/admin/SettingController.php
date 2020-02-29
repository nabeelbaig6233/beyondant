<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\category;
use Illuminate\Http\Request;
use App\models\setting;
use File;

class SettingController extends Controller
{
    public function index()
    {
        $content['record'] = setting::find(1);
        $content['title'] = 'Website Setting';
        return view('admin.setting.form',$content);
    }

    public function update(Request $request) {
        if ($request->input()) {
            if ($request->input('_token')) {
                $request->request->remove('_token');
            }
            $record = setting::find(1);
            $record->language_id = \Auth::user()->language_id;
            foreach ($request->input() as $key => $value) {
                $record->$key = $value;
            }
            $record->status = '1';
            $record->created_by = \Auth::user()->id;

            if (!empty($request->file('logo'))) {
                $image_path = setting::where('id',1)->first()->logo;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $image = single_image($request->file('logo'),request()->segment(2));
                $record->logo = $image;
            }
            if (!empty($request->file('favico'))) {
                $image_path = setting::where('id',1)->first()->favico;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $image = single_image($request->file('favico'),request()->segment(2));
                $record->favico = $image;
            }

            $record->save();
            return back()->with('success','Setting Updated Successfully.');
        }
    }
}
