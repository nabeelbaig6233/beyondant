<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\attribute;
use Illuminate\Http\Request;
use File;

class AttributeController extends Controller
{
    public function index()
    {
        $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)));
        if (request()->ajax()) {
            return datatables()->of($this->attribute())
                ->addColumn('checkbox',function($data){
                    return '<input type="checkbox" class="delete_checkbox flat" value="'.$data->acid.'">';
                })->addColumn('action',function($data){
                    return '<a title="Edit" href="'.request()->segment(2).'/form/edit/'.$data->acid.'" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>&nbsp;<a title="Duplicate" href="'.request()->segment(2).'/form/duplicate/'.$data->acid.'" class="btn btn-success btn-sm"><i class="fa fa-square-o"></i></a>&nbsp;<button title="View" type="button" name="view" id="'.$data->acid.'" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="'.$data->acid.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                })->rawColumns(['checkbox','action','image'])->make(true);
        }
        return view('admin.'.request()->segment(2).'.list')->with($content);
    }

    public function form(Request $request, $form_choice = "",$id="")
    {
        if ($request->input()) {
            $record = ($form_choice == 'edit') ? attribute::find($request->input('id')) : new attribute;
            $this->validate($request,[
                'name' => 'required|unique:attribute'
            ]);
            $record->language_id = $request->input('language_id') ?? \Auth::user()->language_id;
            $record->name = $request->input('name');
            $record->status = '1';
            $record->created_by = \Auth::user()->id;
            $record->save();


            if($form_choice == 'edit'){
                $catId = $record->catId($request->input('id'));
                $catAttr = [];
                foreach ($catId as $cats) {
                    $catAttr []= $cats->sub_category_id;
                }
                $count = count($request->input('sub_category_id'));
                for ($i=0; $i<$count; $i++) {
                    if (!in_array($request->input('sub_category_id')[$i],$catAttr)) {
                        \DB::table('attribute_sub_category')->insert([
                            'attribute_id' => $record->id,
                            'sub_category_id' => $request->input('sub_category_id')[$i],
                            'language_id' => $request->input('language_id') ?? \Auth::user()->language_id,
                            'created_by' => \Auth::user()->id
                        ]);
                    }
                }
                return redirect('admin/'.request()->segment(2))->with('success','Updated Successfully.');
            }

            else if($form_choice == 'add'|| $form_choice == 'duplicate'){
                if ($record->id) {
                    $count = count($request->input('sub_category_id'));
                    for ($i=0; $i<$count; $i++) {
                        \DB::table('attribute_sub_category')->insert([
                            'attribute_id' => $record->id,
                            'sub_category_id' => $request->input('sub_category_id')[$i],
                            'language_id' => $request->input('language_id') ?? \Auth::user()->language_id,
                            'created_by' => \Auth::user()->id
                        ]);
                    }
                }
                return redirect('admin/'.request()->segment(2))->with('success','Added Successfully.');
            }
        }
        else {
            $view = request()->segment(2).'.form';
            if($form_choice == 'edit' || $form_choice == 'duplicate'){
                $content['record'] = $this->attribute($id);
            }
            $language = new \App\models\language;
            $sub_category = new \App\models\sub_category;
            $content['language'] = $language->getLanguage();
            $content['sub_category'] = $sub_category->getSubCategory();
            $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)).' '.$form_choice);
            return view('admin.'.$view)->with($content);
        }
    }

    public function view($id)
    {
        if (request()->ajax()) {
            $data = $this->attribute($id);
            return response()->json($data);
        }
    }

    protected function attribute($id = null) {
        $query = \DB::table('attribute as a')->select('ac.id as acid','a.id','a.name as aname','a.language_id','s.id as sid','s.name as sname')->join('attribute_sub_category as ac','ac.attribute_id','=','a.id')->join('sub_category as s','ac.sub_category_id','=','s.id');
        if (!empty($id)) {
            $query = $query->where('ac.id',$id)->first();
        } else {
            $query = $query->orderBy('a.id','desc')->get()->all();
        }
        return $query;
    }

    public function destroy($id)
    {
        $attribute = new attribute;
        $attribute_id = $attribute->getAttributeId($id);
        $attribute->deleteAttributeSubCategory($id);
        $attribute->deleteAttribute($attribute_id);
        echo "Deleted Successfully.";
    }

    public function delete_all(Request $request)
    {
        if ($request->input('checkbox_value')) {
            $id = $request->input('checkbox_value');
            for ($i=0; $i < count($id); $i++) {
                $attribute = new attribute;
                $attribute_id = $attribute->getAttributeId($id[$i]);
                $attribute->deleteAttributeSubCategory($id[$i]);
                $attribute->deleteAttribute($attribute_id);
            }
            echo "Selected records Deleted Successfully.";
        }
    }
}
