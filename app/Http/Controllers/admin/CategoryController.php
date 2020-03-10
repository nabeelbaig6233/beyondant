<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\category;
use Illuminate\Http\Request;
use File;

class CategoryController extends Controller
{
    public function index()
    {
        if (!in_array('viewCategory',\Request::get('permission'))) {
            return redirect('admin');
        }
        $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)));
        if (request()->ajax()) {
            return datatables()->of(Category::latest()->get())
                ->addColumn('image',function($data){
                    return '<img width="65" src="'.asset(!empty($data->image)?$data->image:'assets/admin/images/placeholder.png').'">';
                })
                ->addColumn('checkbox',function($data){
                    return '<input type="checkbox" class="delete_checkbox flat" value="'.$data->id.'">';
                })->addColumn('action',function($data){
                    return '<a title="Edit" href="'.request()->segment(2).'/form/edit/'.$data->id.'" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>&nbsp;<a title="Duplicate" href="'.request()->segment(2).'/form/duplicate/'.$data->id.'" class="btn btn-success btn-sm"><i class="fa fa-square-o"></i></a>&nbsp;<button title="View" type="button" name="view" id="'.$data->id.'" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                })->rawColumns(['checkbox','action','image'])->make(true);
        }
        return view('admin.'.request()->segment(2).'.list')->with($content);
    }

    public function form(Request $request, $form_choice = "",$id="")
    {
        if (!in_array('createCategory',\Request::get('permission'))) {
            return redirect('admin');
        }
        if ($request->input()) {

            if ($request->input('_token')) {
                $request->request->remove('_token');
            }
            $record = ($form_choice == 'edit') ? Category::find($id) : new Category ;
            $record->language_id = \Auth::user()->language_id;
            foreach ($request->input() as $key => $value) {
                $record->$key = $value;
            }
            $record->status = '1';
            $record->created_by = \Auth::user()->id;

            if (!empty($request->file('image'))) {
                if ($form_choice == 'edit') {
                    $image_path = Category::where('id',$id)->first()->image;
                    if (File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }
                $image = single_image($request->file('image'),request()->segment(2));
                $record->image = $image;
            }

            $record->save();

            if($form_choice == 'edit'){
                return redirect('admin/'.request()->segment(2))->with('success','Updated Successfully.');
            }

            else if($form_choice == 'add'|| $form_choice == 'duplicate'){
                return redirect('admin/'.request()->segment(2))->with('success','Added Successfully.');
            }
        }
        else {
            $view = request()->segment(2).'.form';
            if($form_choice == 'edit' || $form_choice == 'duplicate'){
                $content['record'] = Category::findOrFail($id);
            }
            $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)).' '.$form_choice);
            return view('admin.'.$view)->with($content);
        }
    }

    public function view($id)
    {
        if (request()->ajax()) {
            $data = Category::findOrFail($id);
            return response()->json($data);
        }
    }

    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();
        echo "Deleted Successfully.";
    }

    public function delete_all(Request $request)
    {
        if ($request->input('checkbox_value')) {
            $id = $request->input('checkbox_value');
            for ($i=0; $i < count($id); $i++) {
                $data = Category::findorFail($id[$i]);
                $data->delete();
            }
            echo "Selected records Deleted Successfully.";
        }
    }
}
