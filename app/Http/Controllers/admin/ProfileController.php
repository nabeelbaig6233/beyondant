<?php

namespace App\Http\Controllers\admin;

use App\AnalyticsData;
use App\Http\Controllers\Controller;
use App\Mail\ResetPassword;
use App\Mail\UpgradeNotification;
use App\models\meeting;
use App\models\views;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
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
                })->addColumn('qrcode', function($data) {
                    if (!\File::exists('assets/uploads/customer/'.$data->id.'.png')) {
                        $file = public_path('assets/uploads/customer/'.$data->id.'.png');
                        \QRCode::text(route('pro',$data->id))->setOutfile($file)->png();
                    }
                    return '<a href="'.asset('assets/uploads/customer/'.$data->id.'.png').'" download="QR"><img width="65" src="'.asset('assets/uploads/customer/'.$data->id.'.png').'"></a>';
                })->addColumn('checkbox',function($data){
                    return '<input type="checkbox" class="delete_checkbox flat" value="'.$data->id.'">';
                })->addColumn('views',function($data){
                    return auth()->user()->subscription_status===1?'<h4 class="text-center font-weight-bold text-danger">'.$this->getProfileViews($data->id).'</h4>':'<h4 class="text-center font-weight-bold text-danger"> - </h4>';
                })
                ->addColumn('profile_link', function ($data) {
                    return '<a target="_blank" href="' . route('pro',$data->id) . '">'. $data->first_name .'</a>';
                })->addColumn('action',function($data){
                    $checked=$data->overridden_profile===1?'checked':'';
                    $actions='<button title="View" type="button" name="view" id="'.$data->id.'" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Show Devices" type="button" name="device" id="'.$data->id.'" class="device btn btn-primary btn-sm"><i class="fa fa-laptop"></i></button>&nbsp;<button title="Reset Password" type="button" name="reset_password" id="'.$data->id.'" class="reset_password btn btn-warning btn-sm"><i class="fa fa-key"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                    $company=auth()->user()->role_id===5?$actions.'<button title="Edit" type="button" name="edit" id="' . $data->id . '" class="edit btn btn-success btn-sm"><i class="fa fa-pencil"></i></button>&nbsp;<button title="Link Profile" type="button" name="link_profile" id="' . $data->id . '" class="link_profile btn btn-primary btn-sm"><i class="fa fa-chain"></i></button>
                                                                   <div class="custom-control custom-switch">
                                                                      <input type="checkbox" class="custom-control-input override" '.$checked.' id="switch:'.$data->id.'">
                                                                      <label class="custom-control-label" for="switch:'.$data->id.'">Switch Off For Employee</label>
                                                                    </div>': $actions;
                    $upgrade=auth()->user()->role_id===1?$company.'<button title="Upgrade To Multi Device Profile" type="button" name="upgrade" id="'.$data->id.'" class="upgrade btn btn-dark btn-sm"><i class="fa fa-users"></i></button>&nbsp;<button title="Login As This User" type="button" name="login_user" id="'.$data->id.'" class="login_user btn btn-danger btn-sm"><i class="fa fa-user"></i></button>':$company;
                    return $upgrade;
                })->rawColumns(['checkbox','action','image','profile_link','views','qrcode'])->make(true);
        }
        return view('admin.'.request()->segment(2).'.list')->with($content);
    }

    public function getProfileViews($id){
        $result=views::select('views_count')->where('path','/public/profile/'.$id)->get()->sum(function($item){return $item->views_count;});
        return $result;
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

    public function upgrade_profile($id){
        $user=User::find($id);
        $user->role_id=7;
        $user->acc_type='individual';
        $user->save();
        Mail::to($user->email)->send(new UpgradeNotification($user->first_name,"Multi Device Beyondant Account"));
        return response()->json(["response"=>"Account Upgraded Successfully. The User Will Receive An Email Shortly."]);
    }

    public function login_user_account($id){
        $user=User::find($id);
        auth()->logout();
        auth()->login($user);
        return redirect()->route('pro',$id);
    }

    public function profile_url($id,Request $request){
        $profile_selection=$request->get('check').'';
        User::find($id)->update([
           'website'=>$this->check_https($request->get('website')),
           'linkedin'=>$this->check_https($request->get('linkdin')),
           'facebook'=>$this->check_https($request->get('facebook')),
           'instagram'=>$this->check_https($request->get('instagram')),
           'tiktok'=>$this->check_https($request->get('tiktok')),
           'website_check'=>$profile_selection=='website'?1:0,
           'linkedin_check'=>$profile_selection=='linkdin'?1:0,
           'facebook_check'=>$profile_selection=='facebook'?1:0,
           'instagram_check'=>$profile_selection=='instagram'?1:0,
           'tiktok_check'=>$profile_selection=='tiktok'?1:0
        ]);
    }

    public function check_https($url){
        $check_https=explode(':',$url)[0];
        if(strlen($url)>3&&$check_https!='https'){
            return 'https://'.$url;
        }
        return $url;
    }

    public function override_profiles($id){
        $users=User::where([['role_id','=',2],['parent_id','=',$id],['acc_type','=','personal']])->get();
        $users->map(function($user){
            $user->update([
                'overridden_profile'=>1
            ]);
        });
    }

    public function allow_employee_profile($id){
        $user=User::find($id);
        $user->update([
           'overridden_profile'=>$user->overridden_profile===1?0:1
        ]);
    }

}
