<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function index()
    {
        $variant = \DB::table('variant as v')->select('v.name as vname','v.id','a.name as aname')->leftJoin('attribute as a','a.id','=','v.attribute_id')->orderBy('v.id','desc')->get();
        $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)));
        if (request()->ajax()) {
            return datatables()->of($variant)
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
            $record = ($form_choice == 'edit') ? variant::find($id) : new variant ;

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
                $content['record'] = variant::findOrFail($id);
            }
            $language = new \App\models\language;
            $attribute = new \App\models\attribute;
            $content['language'] = $language->getLanguage();
            $content['attribute'] = $attribute->getAttributess();
            $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)).' '.$form_choice);
            return view('admin.'.$view)->with($content);
        }
    }

    public function view($id)
    {
        if (request()->ajax()) {
            $data = \DB::table('variant as v')->select('v.name as vname','v.id','a.name as aname')->leftJoin('attribute as a','a.id','=','v.attribute_id')->where('v.id',$id)->first();;
            return response()->json($data);
        }
    }

    public function destroy($id)
    {
        $data = variant::findOrFail($id);
        $data->delete();
        echo "Deleted Successfully.";
    }

    public function delete_all(Request $request)
    {
        if ($request->input('checkbox_value')) {
            $id = $request->input('checkbox_value');
            for ($i=0; $i < count($id); $i++) {
                $data = variant::findorFail($id[$i]);
                $data->delete();
            }
            echo "Selected records Deleted Successfully.";
        }
    }
}
