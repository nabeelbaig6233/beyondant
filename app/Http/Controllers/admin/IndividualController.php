<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\AccountMail;
use App\models\device;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class IndividualController extends Controller
{
    public function index()
    {
        if (!in_array('viewIndividual', \Request::get('permission'))) {
            return redirect('admin');
        }
        $content['title'] = ucwords(str_replace('-', ' ', request()->segment(2)));
//        dd(User::latest()->where('role_id',2)->get());
        if (request()->ajax()) {
            return datatables()->of(User::latest()->where([['role_id', "=", 7], ['acc_type', "=", "individual"]])->get())
                ->addColumn('image', function ($data) {
                    return '<img width="65" src="' . asset(!empty($data->profile_picture) ? $data->profile_picture : 'assets/admin/images/placeholder.png') . '">';
                })
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data->id . '">';
                })
                ->addColumn('action', function ($data) {
//                    <button title="Add Employee" type="button" name="add_employee" id="'.$data->id.'" class="add_employee btn btn-primary btn-sm"><i class="fa fa-user-plus"></i></button>&nbsp;
                    return '<button title="View" type="button" name="view" id="' . $data->id . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Show Devices" type="button" name="show_emp" id="' . $data->id . '" class="show_emp btn btn-info btn-sm"><i class="fa fa-user"></i></button>&nbsp;<button title="Add Devices" type="button" name="add_device" id="' . $data->id . '"  class="add_device btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>&nbsp;<button title="Reset Password" type="button" name="reset_password" id="'.$data->id.'" class="reset_password btn btn-warning btn-sm"><i class="fa fa-key"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                })->rawColumns(['checkbox', 'action', 'image', 'profile_link'])->make(true);
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

    public function view_devices($id)
    {
        if (request()->ajax()) {
            return datatables()->of(device::where("user_id", "=", $id)->get())->addColumn('actions', function ($data) {
                return '<button title="View" type="button" name="view" id="' . $data->id . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Reset Password" type="button" name="reset_password" id="'.$data->id.'" class="reset_password btn btn-warning btn-sm"><i class="fa fa-key"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
            })->rawColumns(["actions"])->make(true);
        }
    }


    public function create(){
        $password=\Illuminate\Support\Str::random(16);
        User::create([
            'role_id' => 7,
            'first_name' => request()->get("ind_f_name"),
            'last_name' => request()->get("ind_l_name"),
            'job_title' => "",
            'company_name' => "",
            'company_description' => "",
            'contact_number' =>"",
            'mobile_number' => "",
            'mobile_check' => "",
            'email' => request()->get("ind_email")??"",
            'address' => "",
            'state' => "",
            'city' => "",
            'province' => "",
            'zipcode' => "",
            'website' => "",
            'website_check' => "",
            'website_address' => "",
            'linkedin' => "",
            'linkedin_check' => "",
            'instagram' => "",
            'instagram_check' => "",
            'facebook' => "",
            'facebook_check' => "",
            'password' => Hash::make($password),
            'acc_type' => request()->get("acc_type")??"personal",
            'parent_id'=>request()->get("parent_id"),
        ]);
        Mail::to(request()->get("ind_email"))->send(new AccountMail(request()->get("ind_email"),$password,request()->get("acc_type")));
        return 1;
    }

    public function destroy($id)
    {
        if (!in_array('deleteIndividual', \Request::get('permission'))) {
            return redirect('admin');
        }
        $data = User::findOrFail($id);
        $data->delete();
        echo "Deleted Successfully.";
    }

    public function delete_all(Request $request)
    {
        if (!in_array('deleteIndividual', \Request::get('permission'))) {
            return redirect('admin');
        }
        if ($request->input('checkbox_value')) {
            $id = $request->input('checkbox_value');
            for ($i = 0; $i < count($id); $i++) {
                $data = User::findorFail($id[$i]);
                $data->delete();
            }
            echo "Selected records Deleted Successfully.";
        }
    }
}
