<?php

namespace App\Http\Controllers\admin;

use App\models\banner;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    public function index(){
        if (!in_array('viewUserProfile',\Request::get('permission'))) {
            return redirect('admin');
        }
        $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)));
        if (request()->ajax()) {
            return datatables()->of(banner::all())
                ->addColumn('image',function ($data){
                    return '<img width="120" height="60" src="'.asset($data->image_url).'">';
                })
                ->addColumn('action',function($data){
                    $actions='<button title="Edit" type="button" name="edit" id="'.$data->id.'" class="edit btn btn-info btn-sm"><i class="fa fa-edit"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                    return $actions;
                })->rawColumns(['checkbox','action','image'])->make(true);
        }
        return view('admin.'.request()->segment(2).'.list')->with($content);
    }

    public function show($id){
        if(request()->ajax()){
            $banner=banner::find($id);
            return $banner;
        }
    }

    public function update($id){
        if(request()->ajax()){
            $banner=banner::find($id);
            if (\File::exists($banner->image_url)) {
                \File::delete($banner->image_url);
            }
            $banner_image = request()->file("banner_image");
            $image = rand() . '.' . $banner_image->getClientOriginalExtension();
            $banner_image->move(public_path('assets/admin/images'), $image);
            $banner_image = 'assets/admin/images/' . $image;
            $web_url = request()->get("banner_url");
            $banner->image_url=$banner_image;
            $banner->link=$web_url;
            $banner->save();
        }
    }

    public function store(){
        if(request()->ajax()){
            $banners=banner::all();
            if (count($banners)<5) {
                $banner_image = request()->file("banner_image");
                $image = rand() . '.' . $banner_image->getClientOriginalExtension();
                $banner_image->move(public_path('assets/admin/images'), $image);
                $banner_image = 'assets/admin/images/' . $image;
                $web_url = request()->get("banner_url");
                banner::create(
                    ['image_url' => $banner_image,
                        'link' => $web_url]);
                echo 1;
            }else{
                echo 0;
            }

        }
    }

    public function destroy($id)
    {
        if (request()->ajax()) {
            banner::find($id)->delete();
            return "Deleted Successfully.";
        }
    }

}
