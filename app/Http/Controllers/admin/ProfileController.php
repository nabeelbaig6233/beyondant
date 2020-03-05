<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\profile;
use Illuminate\Http\Request;
use File;

class ProfileController extends Controller
{
    public function index()
    {
        if (!in_array('viewUserProfile',\Request::get('permission'))) {
            return redirect('admin');
        }
        $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)));
        if (request()->ajax()) {
            return datatables()->of(profile::latest()->get())
                ->addColumn('image',function ($data){
                    return '<img width="65" src="'.asset(!empty($data->profile_image)?$data->profile_image:'assets/admin/images/placeholder.png').'">';
                })
                ->addColumn('checkbox',function($data){
                    return '<input type="checkbox" class="delete_checkbox flat" value="'.$data->id.'">';
                })->addColumn('action',function($data){
                    return '<button title="View" type="button" name="view" id="'.$data->id.'" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                })->rawColumns(['checkbox','action','image'])->make(true);
        }
        return view('admin.'.request()->segment(2).'.list')->with($content);
    }

    public function view($id)
    {
        if (request()->ajax()) {
            $data = profile::findOrFail($id);
            return response()->json($data);
        }
    }

    public function destroy($id)
    {
        if (!in_array('deleteUserProfile',\Request::get('permission'))) {
            return redirect('admin');
        }
        $data = profile::findOrFail($id);
        $data->delete();
        echo "Deleted Successfully.";
    }

    public function delete_all(Request $request)
    {
        if (!in_array('deleteUserProfile',\Request::get('permission'))) {
            return redirect('admin');
        }
        if ($request->input('checkbox_value')) {
            $id = $request->input('checkbox_value');
            for ($i=0; $i < count($id); $i++) {
                $data = profile::findorFail($id[$i]);
                $data->delete();
            }
            echo "Selected records Deleted Successfully.";
        }
    }
}
