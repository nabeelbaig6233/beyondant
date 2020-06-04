<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AllProfilesController extends Controller
{
    public function index()
    {
        $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)));
        if (request()->ajax()) {
            $query = User::where([['role_id', '<>', 1], ['role_id', '<>', 4]])->get();
            return datatables()->of($query)->
            addColumn('image', function ($data) {
                return '<img width="65" src="' . asset(!empty($data->profile_picture) ? $data->profile_picture : 'assets/admin/images/placeholder.png') . '">';
            })->
            addColumn('checkbox', function ($data) {
                return '<input type="checkbox" class="delete_checkbox flat" value="' . $data->id . '">';
            })->
            addColumn('views', function ($data) {
                $profile = new ProfileController();
                return auth()->user()->subscription_status === 1 ? '<h4 class="text-center font-weight-bold text-danger">' . $profile->getProfileViews($data->id) . '</h4>' : '<h4 class="text-center font-weight-bold text-danger"> - </h4>';
            })->
            addColumn('profile_link', function ($data) {
                return '<a target="_blank" href="' . route('pro', $data->id) . '">' . $data->first_name . '</a>';
            })->
            addColumn('account_type', function ($data) {
//                $checked=$data->overridden_profile===1?'checked':'';
//                $actions='<button title="View" type="button" name="view" id="'.$data->id.'" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Show Devices" type="button" name="device" id="'.$data->id.'" class="device btn btn-primary btn-sm"><i class="fa fa-laptop"></i></button>&nbsp;<button title="Reset Password" type="button" name="reset_password" id="'.$data->id.'" class="reset_password btn btn-warning btn-sm"><i class="fa fa-key"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
//                $actions = '<button title="View" type="button" name="view" id="' . $data->id . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                //
//                $company=auth()->user()->role_id===5?$actions.'<button title="Edit" type="button" name="edit" id="' . $data->id . '" class="edit btn btn-success btn-sm"><i class="fa fa-pencil"></i></button>&nbsp;<button title="Link Profile" type="button" name="link_profile" id="' . $data->id . '" class="link_profile btn btn-primary btn-sm"><i class="fa fa-chain"></i></button>
//                                                                   <div class="custom-control custom-switch">
//                                                                      <input type="checkbox" class="custom-control-input override" '.$checked.' id="switch:'.$data->id.'">
//                                                                      <label class="custom-control-label" for="switch:'.$data->id.'">Switch Off For Employee</label>
//                                                                    </div>': $actions;
//                $upgrade=auth()->user()->role_id===1?$company.'<button title="Upgrade To Multi Device Profile" type="button" name="upgrade" id="'.$data->id.'" class="upgrade btn btn-dark btn-sm"><i class="fa fa-users"></i></button>&nbsp;<button title="Login As This User" type="button" name="login_user" id="'.$data->id.'" class="login_user btn btn-danger btn-sm"><i class="fa fa-user"></i></button>':$company;
   //             return $actions;
                $role='';
                $color='';
                switch($data->role_id){
                    case 2:
                        $role='Basic';
                        $color='primary';
                        break;
                    case 5:
                        $role='Company';
                        $color='secondary';
                        break;
                    case 7:
                        $role='Multi Device';
                        $color='success';
                        break;
                }
                $badge='<h4 class="badge badge-'.$color.' badge-pill">'.$role.'</h4>';
                return $badge;
            })->rawColumns(['checkbox', 'account_type', 'image', 'profile_link', 'views'])->make(true);
        }

        return view('admin.'.request()->segment(2).'.list')->with($content);
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

}
