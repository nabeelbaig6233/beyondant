<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\category;
use Illuminate\Http\Request;
use App\models\home;
use File;

class HomeController extends Controller
{
    public function index()
    {
        $content['record'] = home::find(1);
        $content['title'] = 'Website Home';
        return view('admin.home.form',$content);
    }

    public function update(Request $request) {
        if ($request->input()) {
            if ($request->input('_token')) {
                $request->request->remove('_token');
            }
            $record = home::find(1);
            foreach ($request->input() as $key => $value) {
                $record->$key = $value;
            }
            $record->status = '1';
            $record->created_by = \Auth::user()->id;

            if (!empty($request->file('section_image4'))) {
                $image_path = home::where('id',1)->first()->section_image4;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $image = single_image($request->file('section_image4'),request()->segment(2));
                $record->section_image4 = $image;
            }
            if (!empty($request->file('section_image5'))) {
                $image_path = home::where('id',1)->first()->section_image5;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $image = single_image($request->file('section_image5'),request()->segment(2));
                $record->section_image5 = $image;
            }

            $record->save();
            return back()->with('success','Home Page Updated Successfully.');
        }
    }
}
