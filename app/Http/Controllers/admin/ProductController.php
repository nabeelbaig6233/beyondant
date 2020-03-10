<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\category;
use App\models\product;
use Illuminate\Http\Request;
use File;

class ProductController extends Controller
{
    public function index()
    {
        $product = \DB::table('product as p')->select('p.name as pname','p.id','p.sku','p.image','p.featured','sc.name as scname')->leftJoin('sub_category as sc','sc.id','=','p.sub_category_id')->orderBy('p.id','desc')->get();
        $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)));
        if (request()->ajax()) {
            return datatables()->of($product)
                ->addColumn('image',function($data){
                    return '<img width="65" src="'.asset(!empty($data->image)?$data->image:'assets/admin/images/placeholder.png').'">';
                })
                ->addColumn('checkbox',function($data){
                    return '<input type="checkbox" class="delete_checkbox flat" value="'.$data->id.'">';
                })
                ->addColumn('featured',function($data){
                    return '<label class="switch"><input class="featured" id="'.$data->id.'" type="checkbox" value="'.$data->featured.'" '.(($data->featured == 1) ? "checked" : "" ).'><span class="slider round"></span></label>';
                })
                ->addColumn('action',function($data){
                    return '<a title="Edit" href="'.request()->segment(2).'/form/edit/'.$data->id.'" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>&nbsp;<a title="Duplicate" href="'.request()->segment(2).'/form/duplicate/'.$data->id.'" class="btn btn-success btn-sm"><i class="fa fa-square-o"></i></a>&nbsp;<button title="View" type="button" name="view" id="'.$data->id.'" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                })->rawColumns(['checkbox','action','image','featured'])->make(true);
        }
        return view('admin.'.request()->segment(2).'.list')->with($content);
    }

    public function featured(Request $request) {
        if (request()->ajax()) {
            $rec = product::find((int)$request->input('id'));
            $rec->featured = (($request->input('featured') === '0') ? 1 : 0);
            $rec->save();
            $featured = (($request->input('featured') === '0') ? 'enable' : 'disable');
            return response()->json("Featured ".$featured." Successfully.");
        }
    }

    public function form(Request $request, $form_choice = "",$id="")
    {
        if ($request->input()) {
            $variants = $request->input('variant');
            if ($request->input('_token')) {
                $request->request->remove('_token');
                $request->request->remove('variant');
            }
            $record = ($form_choice == 'edit') ? product::find($id) : new product ;

            $record->language_id = \Auth::user()->language_id;
            foreach ($request->input() as $key => $value) {
                $record->$key = $value;
            }
            $record->created_by = \Auth::user()->id;
            $record->status = '1';
            if (!empty($request->file('image'))) {
                if ($form_choice == 'edit') {
                    $image_path = product::where('id',$id)->first()->image;
                    if (File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }
                $image = single_image($request->file('image'),request()->segment(2));
                $record->image = $image;
            }
            if (!empty($request->file('hover_image'))) {
                if ($form_choice == 'edit') {
                    $image_path = product::where('id',$id)->first()->hover_image;
                    if (File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }
                $image = single_image($request->file('hover_image'),request()->segment(2));
                $record->hover_image = $image;
            }
            $i = 0;
            $content = [];
            $multi_image = $request->input('multi_image',TRUE);
            if (!empty($multi_image) && is_array($multi_image)) {
                for ($i = 0; $i < count($multi_image); $i++) {
                    $content[$i] = $request->input('multi_image',TRUE)[$i];
                }
            }
            if (!empty($request->file('multi_image'))) {
                for ($j = 0; $j < count($request->file('multi_image')); $j++) {
                    $image = single_image($request->file('multi_image',TRUE)[$j],request()->segment(2));
                    $content[$i] = $image;
                    $i++;
                }
            }
            $record->multi_image = !empty($content)?json_encode($content):'';

            $record->save();

            if($form_choice == 'edit'){
                return redirect()->route(request()->segment(2))->with('success','Updated Successfully.');
            }

            else if($form_choice == 'add'|| $form_choice == 'duplicate'){
                if ($record->id) {
                    if ($variants) {
                        foreach ($variants as $variant) {
                            if (isset($variant['variant_id'])) {
                                \DB::table('product_variant')->insert([
                                    'language_id' => \Auth::user()->language_id??'',
                                    'variant_id' => $variant['variant_id']??'',
                                    'variant_price' => $variant['variant_price']??'',
                                    'product_id' => $record->id,
                                ]);
                            }
                        }
                    }
                }
                return redirect('admin/'.request()->segment(2))->with('success','Added Successfully.');
            }
        }
        else {
            $view = request()->segment(2).'.form';
            if($form_choice == 'edit' || $form_choice == 'duplicate'){
                $content['record'] = product::findOrFail($id);
                $content['variant'] = $this->getattr($content['record']->sub_category_id, $id);
            }
            $language = new \App\models\language;
            $category = new \App\models\category;
            $content['language'] = $language->getLanguage();
            $content['category'] = $category->getCategory();
            $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)).' '.$form_choice);
            return view('admin.'.$view)->with($content);
        }
    }

    public function getSubCategory() {
        $sub_category = new \App\models\sub_category;
        $sub_category = $sub_category->getSubCategory(request()->category_id);
        return response()->json($sub_category);
    }

    public function getattr($id, $product_id = "")
    {
        $variantId= [];
        $variantPrice2 = [];
        if (isset($product_id)) {
            $productVariant = \DB::table('product_variant')->select('variant_id','variant_price')->where('product_id',$product_id)->get()->all();
            foreach ($productVariant as $item) {
                $variantId [] = $item->variant_id;
                $variantPrice2 [$item->variant_id] = $item->variant_price;
            }
        }
//        dd($variantId);
        $attribute = \DB::table('attribute as a')->select('a.name', 'a.id')->where('a.language_id',\Auth::user()->language_id)->whereIn('a.id',function($query) use ($id) {
                $query->select('ac.attribute_id')->from('attribute_sub_category as ac')->where('ac.sub_category_id',$id);
            })->get()->all();
        $output = '<h5 style="text-align: center">Select Attribute</h5>';
        foreach ($attribute as $attr) {
            $variant = \DB::table('variant as v')->select('v.id','v.name')->where([['v.attribute_id',$attr->id],['v.language_id',\Auth::user()->language_id]])->get()->all();
            if ($variant) {
                $output .= '<div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="sub_category_id">'.$attr->name.' <span class="required">*</span>
                                </label>
                                <div>';
                foreach ($variant as $vari) {
                    $output .= '<label>
                                    <input type="checkbox" data-id="#'.$vari->id.'" '.(in_array($vari->id,$variantId)?"checked":"").'  name="variant['.$vari->id.'][variant_id]" value="'.$vari->id.'" class="variant">  '.$vari->name.'
                                 </label>
                                 <input type="number" id="'.$vari->id.'" name="variant['.$vari->id.'][variant_price]" value="'.(in_array($vari->id,$variantId)? $variantPrice2[$vari->id]:"").'" placeholder="Variant Price" class="prices form-control">
                                 <br>';
                }
                $output .= '</div></div>';
            }
        }
        if (request()->ajax()) {
            return response()->json($output);
        } else {
            return $output;
        }
    }

    public function view($id)
    {
        if (request()->ajax()) {
            $data = \DB::table('product as p')->select('p.name as pname','p.id','sc.name as scname')->leftJoin('sub_category as sc','sc.id','=','p.sub_category_id')->where('p.id',$id)->first();;
            return response()->json($data);
        }
    }

    public function destroy($id)
    {
        \DB::table('product_variant')->where('product_id',$id)->delete();
        product::findOrFail($id)->delete();
        echo "Deleted Successfully.";
    }

    public function delete_all(Request $request)
    {
        if ($request->input('checkbox_value')) {
            $id = $request->input('checkbox_value');
            for ($i=0; $i < count($id); $i++) {
                \DB::table('product_variant')->where('product_id',$id[$i])->delete();
                product::findorFail($id[$i])->delete();
            }
            echo "Selected records Deleted Successfully.";
        }
    }
}
