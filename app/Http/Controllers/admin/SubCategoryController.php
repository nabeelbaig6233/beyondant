<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\sub_category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $sub_category = \DB::table('sub_category as s')->select('s.name as sname','s.id','c.name as cname')->leftJoin('category as c','c.id','=','s.category_id')->orderBy('s.id','desc')->get();
        $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)));
        if (request()->ajax()) {
            return datatables()->of($sub_category)
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
            $record = ($form_choice == 'edit') ? sub_category::find($id) : new sub_category ;

            $record->language_id = \Auth::user()->language_id;
            foreach ($request->input() as $key => $value) {
                $record->$key = $value;
            }
            $record->created_by = \Auth::user()->id;
            $record->status = '1';

            $record->save();

            if($form_choice == 'edit'){
                return redirect()->route(request()->segment(2))->with('success','Updated Successfully.');
            }

            else if($form_choice == 'add'|| $form_choice == 'duplicate'){
                return redirect('admin/'.request()->segment(2))->with('success','Added Successfully.');
            }
        }
        else {
            $view = request()->segment(2).'.form';
            if($form_choice == 'edit' || $form_choice == 'duplicate'){
                $content['record'] = sub_category::findOrFail($id);
            }
            $language = new \App\models\language;
            $category = new \App\models\category;
            $content['language'] = $language->getLanguage();
            $content['category'] = $category->getCategory();
            $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)).' '.$form_choice);
            return view('admin.'.$view)->with($content);
        }
    }

    public function view($id)
    {
        if (request()->ajax()) {
            $data = \DB::table('sub_category as s')->select('s.name as sname','s.id','c.name as cname')->leftJoin('category as c','c.id','=','s.category_id')->where('s.id',$id)->first();;
            return response()->json($data);
        }
    }

    public function destroy($id)
    {
        $data = sub_category::findOrFail($id);
        $data->delete();
        echo "Deleted Successfully.";
    }

    public function delete_all(Request $request)
    {
        if ($request->input('checkbox_value')) {
            $id = $request->input('checkbox_value');
            for ($i=0; $i < count($id); $i++) {
                $data = sub_category::findorFail($id[$i]);
                $data->delete();
            }
            echo "Selected records Deleted Successfully.";
        }
    }
}
