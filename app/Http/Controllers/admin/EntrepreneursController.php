<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\entrepreneurs;
use App\models\reseller;
use Illuminate\Http\Request;

class EntrepreneursController extends Controller
{
    public function index()
    {
        if (!in_array('viewReseller',\Request::get('permission'))) {
            return redirect('admin');
        }
        $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)));
        if (request()->ajax()) {
            return datatables()->of(entrepreneurs::latest()->get())
                ->addColumn('checkbox',function($data){
                    return '<input type="checkbox" class="delete_checkbox flat" value="'.$data->id.'">';
                })->addColumn('action',function($data){
                    return '<button title="View" type="button" name="view" id="'.$data->id.'" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                })->rawColumns(['checkbox','action'])->make(true);
        }
        return view('admin.'.request()->segment(2).'.list')->with($content);
    }

    public function view($id)
    {
        if (request()->ajax()) {
            $data = entrepreneurs::findOrFail($id);
            return response()->json($data);
        }
    }

    public function destroy($id)
    {
        if (!in_array('deleteReseller',\Request::get('permission'))) {
            return redirect('admin');
        }
        $data = entrepreneurs::findOrFail($id);
        $data->delete();
        echo "Deleted Successfully.";
    }

    public function delete_all(Request $request)
    {
        if (!in_array('deleteReseller',\Request::get('permission'))) {
            return redirect('admin');
        }
        if ($request->input('checkbox_value')) {
            $id = $request->input('checkbox_value');
            for ($i=0; $i < count($id); $i++) {
                $data = entrepreneurs::findorFail($id[$i]);
                $data->delete();
            }
            echo "Selected records Deleted Successfully.";
        }
    }
}
