<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\language;
use Illuminate\Http\Request;
use File;

class LanguageController extends Controller
{
    public function index()
    {
        $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)));
        if (request()->ajax()) {
            return datatables()->of(language::latest()->get())
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
        if ($request->input()) {

            if ($request->input('_token')) {
                $request->request->remove('_token');
            }
            $record = ($form_choice == 'edit') ? Language::find($id) : new Language ;

            foreach ($request->input() as $key => $value) {
                $record->$key = $value;
            }
            $record->created_by = \Auth::user()->id;
            $record->status = '1';

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
                $content['record'] = Language::findOrFail($id);
            }
            $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)).' '.$form_choice);
            return view('admin.'.$view)->with($content);
        }
    }

    public function view($id)
    {
        if (request()->ajax()) {
            $data = Language::findOrFail($id);
            return response()->json($data);
        }
    }

    public function destroy($id)
    {
        $data = Language::findOrFail($id);
        $data->delete();
        echo "Deleted Successfully.";
    }

    public function delete_all(Request $request)
    {
        if ($request->input('checkbox_value')) {
            $id = $request->input('checkbox_value');
            for ($i=0; $i < count($id); $i++) {
                $data = Language::findorFail($id[$i]);
                $data->delete();
            }
            echo "Selected records Deleted Successfully.";
        }
    }
}
