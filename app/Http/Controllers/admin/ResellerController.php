<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\reseller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ResellerController extends Controller
{
    public function index()
    {
        if (!in_array('viewReseller',\Request::get('permission'))) {
            return redirect('admin');
        }
        $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)));
        if (request()->ajax()) {
            return datatables()->of(reseller::latest()->get())
                ->addColumn('checkbox',function($data){
                    return '<input type="checkbox" class="delete_checkbox flat" value="'.$data->id.'">';
                })->addColumn('profile_url',function($data){
                    return '<a href="'.route("reseller.profile",$data->id).'" class="text-primary"><i class="fa fa-external-link"></i> Profile</a>';
                })
                ->addColumn('action',function($data){
                    return '<button title="View" type="button" name="view" id="'.$data->id.'" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>'
                            .'&nbsp;<button title="Edit" type="button" name="edit" id="'.$data->id.'" class="edit btn btn-success btn-sm"><i class="fa fa-edit"></i></button>';
                })->rawColumns(['checkbox','action','profile_url'])->make(true);
        }
        return view('admin.'.request()->segment(2).'.list')->with($content);
    }

    public function view($id)
    {
        if (request()->ajax()) {
            $data = reseller::findOrFail($id);
            return response()->json($data);
        }
    }


    public function edit($id){
        if(request()->ajax()){
            $reseller=reseller::find($id);
            $master_email='';
            if($reseller->master_id!=0){
                $master_email=reseller::find($reseller->master_id)->email;
            }
            $reseller->master_email=$master_email;
            return response()->json($reseller);
            }
    }


    public function save(){
        if(request()->ajax()){
            $validator=Validator::make(request()->all(),[
                "first_name"=>'required',
                "last_name"=>'required',
                "reseller_level"=>"required",
                "status"=>"required",
                "email"=>"unique:reseller,email"
            ]);
            if($validator->fails()){
                return response()->json($validator->getMessageBag()->toArray());
            }
            else{
                $reseller=new reseller();
                $reseller->f_name=request()->get('first_name')??"";
                $reseller->l_name=request()->get('last_name')??"";
                $reseller->reseller_level=request()->get("reseller_level")??"";
                $reseller->discount_code=request()->get('discount_code')??"";
                $reseller->business_phone=request()->get('phone_number')??"";
                $reseller->email=request()->get('email')??"";
                $reseller->status=request()->get('status')??"";
                $reseller->sponsor_name=request()->get("sponsor_name")??"";
                $reseller->city=request()->get("city")??"";
                $reseller->state=request()->get("state")??"";
                $reseller->address=request()->get("address")??"";
                $reseller->save();
                return 1;
            }
        }
    }


    public function update($id){
        if(request()->ajax()){
            $validator=Validator::make(request()->all(),[
                'master_email'=>'exists:reseller,email'
            ],[
                'exists' => 'The master email is not valid.'
            ]);
            if(!empty(trim(request()->get('master_email')))&&$validator->fails()){
                return response()->json($validator->getMessageBag()->toArray());
            }
            else{
                $master_id=0;
                if(!empty(trim(request()->get('master_email')))){
                    $master_id=reseller::where("email","=",request()->get('master_email'))->first()->id;
                }
                $reseller=reseller::find($id);
                $reseller->f_name=request()->get('first_name')??"";
                $reseller->l_name=request()->get('last_name')??"";
                $reseller->master_id=$master_id;
                $reseller->discount_code=request()->get('discount_code')??"";
                $reseller->business_phone=request()->get('phone_number')??"";
                $reseller->email=request()->get('email')??"";
                $reseller->business_status=request()->get('business_status')??"";
                $reseller->status=request()->get('status')??"";
                $reseller->reseller_level=request()->get("reseller_level")??"";
                $reseller->city=request()->get("city")??"";
                $reseller->state=request()->get("state")??"";
                $reseller->address=request()->get("address")??"";
                $reseller->save();
                return 1;
            }
        }
    }

    public function destroy($id)
    {
        if (!in_array('deleteReseller',\Request::get('permission'))) {
            return redirect('admin');
        }
        $data = reseller::findOrFail($id);
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
                $data = reseller::findorFail($id[$i]);
                $data->delete();
            }
            echo "Selected records Deleted Successfully.";
        }
    }
}
