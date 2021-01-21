<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index()
    {
        if (!in_array('viewCompany', \Request::get('permission'))) {
            return redirect('admin');
        }
        $content['title'] = ucwords(str_replace('-', ' ', request()->segment(2)));
//        dd(User::latest()->where('role_id',2)->get());
        if (request()->ajax()) {
            return datatables()->of(User::latest()->where([['role_id', "=", 5], ['acc_type', "=", "company"]])->orderBy('id')->get())
                ->addColumn('image', function ($data) {
                    return '<img width="65" src="' . asset(!empty($data->profile_picture) ? $data->profile_picture : 'assets/admin/images/placeholder.png') . '">';
                })->addColumn('qrcode', function($data) {
                    if (!\File::exists('assets/uploads/customer/'.$data->id.'.png')) {
                        $file = public_path('assets/uploads/customer/'.$data->id.'.png');
                        \QRCode::text(route('pro',$data->id))->setOutfile($file)->png();
                    }
                    return '<a href="'.asset('assets/uploads/customer/'.$data->id.'.png').'" download="QR"><img width="65" src="'.asset('assets/uploads/customer/'.$data->id.'.png').'"></a>';
                })->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data->id . '">';
                })
                ->addColumn('profile_link', function ($data) {
                    return '<a target="_blank" href="' . route('pro', $data->id) . '">' . $data->first_name . '</a>';
                })->addColumn('action', function ($data) {
                    $actions='<button title="View" type="button" name="view" id="' . $data->id . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Show Employees" type="button" name="show_emp" id="' . $data->id . '" class="show_emp btn btn-info btn-sm"><i class="fa fa-user"></i></button>&nbsp;<button title="Reset Password" type="button" name="reset_password" id="'.$data->id.'" class="reset_password btn btn-warning btn-sm"><i class="fa fa-key"></i></button>&nbsp;<button title="Add Employee" type="button" name="add_employee" id="'.$data->id.'" class="add_employee btn btn-primary btn-sm"><i class="fa fa-user-plus"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>&nbsp;';
                    return auth()->user()->role_id===1?$actions.'<button title="Login As This User" type="button" name="login_user" id="'.$data->id.'" class="login_user btn btn-danger btn-sm"><i class="fa fa-user"></i></button>':$actions;
                })->rawColumns(['checkbox', 'action', 'image', 'profile_link', 'qrcode'])->make(true);
        }
        return view('admin.' . request()->segment(2) . '.list')->with($content);
    }


    public function view($id)
    {
        if (request()->ajax()) {
            $data = User::findOrFail($id);
            return response()->json($data);
        }
    }

    public function view_employees($id)
    {
        if (request()->ajax()) {
            return datatables()->of(User::where("parent_id", "=", $id)->get())->addColumn('actions', function ($data) {
                return '<button title="View" type="button" name="view" id="' . $data->id . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Add Devices" type="button" name="add_device" id="' . $data->id . '"  class="add_device btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>&nbsp;<button title="View Devices" type="button" name="device"  id="' . $data->id . '" class="device btn btn-primary btn-sm"><i class="fa fa-laptop"></i></button>&nbsp;<button title="Reset Password" type="button" name="reset_password" id="'.$data->id.'" class="reset_password btn btn-warning btn-sm"><i class="fa fa-key"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
            })->rawColumns(["actions"])->make(true);
        }
    }

    public static function deletedData($data,$section="",$action="",$deleted_by=0) {
        if(!empty($data)) {
            $deleted_data['name'] = $data->first_name." ".$data->last_name;
            $deleted_data['role_id'] = $data->role_id;
            $deleted_data['email'] = $data->email;
            $deleted_data['company_name'] = $data->company_name;
            $deleted_data['phone_number'] = $data->contact_number;
            $deleted_data['mobile_number'] = $data->mobile_number;
            $deleted_data['section'] = $section;
            $deleted_data['action'] = $action;
            $deleted_data['deleted_by'] = $deleted_by;
            return $deleted_data;
        } else {
            return 0;
        }
    }    

    public function destroy($id)
    {
        if (!in_array('deleteCompany', \Request::get('permission'))) {
            return redirect('admin');
        }
        $data = User::findOrFail($id);
       
        $retData = $this->deletedData($data,"Users_company_profile","deleted",auth()->user()->id);
        
        if($retData)
            return event(new \App\Events\LogTableEvent($retData));

        $data->delete();
        echo "Deleted Successfully.";
    }

    public function delete_all(Request $request)
    {
        if (!in_array('deleteCompany', \Request::get('permission'))) {
            return redirect('admin');
        }
        if ($request->input('checkbox_value')) {
            $id = $request->input('checkbox_value');
            for ($i = 0; $i < count($id); $i++) {
                $data = User::findorFail($id[$i]);
                
                $retData = $this->deletedData($data,"Users_company_profile","deleted",auth()->user()->id);        
                if($retData)
                 event(new \App\Events\LogTableEvent($retData));
                 
                 
                $data->delete();
            }
            echo "Selected records Deleted Successfully.";
        }
    }

}
