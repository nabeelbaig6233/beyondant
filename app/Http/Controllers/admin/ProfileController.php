<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\ResetPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Psy\Util\Str;

class ProfileController extends Controller
{
    public function index()
    {
        if (!in_array('viewUserProfile',\Request::get('permission'))) {
            return redirect('admin');
        }
        $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)));
        if (request()->ajax()) {
            $where = (auth()->user()->role_id == 5) ? [['parent_id','=', auth()->user()->id],['role_id',"=",2],["acc_type","=","personal"]] : [['role_id',"=",2],["acc_type","=","personal"]];
            return datatables()->of(User::latest()->where($where)->get())
                ->addColumn('image',function ($data){
                    return '<img width="65" src="'.asset(!empty($data->profile_picture)?$data->profile_picture:'assets/admin/images/placeholder.png').'">';
                })
                ->addColumn('checkbox',function($data){
                    return '<input type="checkbox" class="delete_checkbox flat" value="'.$data->id.'">';
                })
                ->addColumn('profile_link', function ($data) {
                    return '<a target="_blank" href="' . route('pro',$data->id) . '">'. $data->first_name .'</a>';
                })->addColumn('action',function($data){
                    $actions='<button title="View" type="button" name="view" id="'.$data->id.'" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Reset Password" type="button" name="reset_password" id="'.$data->id.'" class="reset_password btn btn-warning btn-sm"><i class="fa fa-key"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                    return auth()->user()->role_id===5?$actions.'<button title="Edit" type="button" name="edit" id="' . $data->id . '" class="edit btn btn-success btn-sm"><i class="fa fa-pencil"></i></button>':
                        $actions;
                })->rawColumns(['checkbox','action','image','profile_link'])->make(true);
        }
        return view('admin.'.request()->segment(2).'.list')->with($content);
    }

    public function view($id)
    {
        if (request()->ajax()) {
            $data["data"] = User::findOrFail($id);
            $data["company"] = User::find($data["data"]->parent_id);
            return response()->json($data);
        }
    }

    public function destroy($id)
    {
        if (!in_array('deleteUserProfile',\Request::get('permission'))) {
            return redirect('admin');
        }
        $data = User::findOrFail($id);
        $data->delete();
        echo "Deleted Successfully.";
    }

    public function delete_all(Request $request)
    {
        if (!in_array('deleteUserProfile',\Request::get('permission'))) {
            return redirect('admin');
        }
        if ($request->input('checkbox_value')) {
            $id = $request->input('checkbox_value');
            for ($i=0; $i < count($id); $i++) {
                $data = User::findorFail($id[$i]);
                $data->delete();
            }
            echo "Selected records Deleted Successfully.";
        }
    }

    public function reset_account_password(){
        //Fetch User
        $id=request()->get("id");
        $password=\Illuminate\Support\Str::random(rand(8,16));
        $user=User::find($id);
        $email=$user->email;
        //update password
        $user->password=Hash::make($password);
        $user->save();
        //send mail
        Mail::to($email)->send(new ResetPassword($email,$password));
        return 1;
    }

}
