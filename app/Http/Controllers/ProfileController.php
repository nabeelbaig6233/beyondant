<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeForm;
use App\Mail\AccountMail;
use App\Mail\CreateEmployeeMail;
use App\models\device;
use App\Notifications\AccountNotification;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Requests\PasswordValidationForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ViewErrorBag;
use Psy\Util\Str;

class ProfileController extends Controller
{
    public function index($id)
    {
        $content['record'] = User::where([['role_id','=',2],['id','=',$id]])->orWhere([['role_id','=',5],['id','=',$id]])->orWhere([['role_id','=',7],['id','=',$id]])->first();
//        dd($content['record']->parent_id);
        if (!empty($content['record'])) {
            if (Auth::check()) {
                if(auth()->user()->parent_id==0){
                    $content["companyInfo"]=User::find(User::find($id)->parent_id);
                    return view('front.profile',$content);}
                else{
                    $content["companyInfo"]=User::find(User::find($id)->parent_id);
                    return view('front.profile',$content);
                }
            }

        if ((int)$content['record']->facebook_check == 1) {
            return redirect($content['record']->facebook);
        } elseif ((int)$content['record']->website_check == 1) {
            return redirect($content['record']->website);
        } elseif ((int)$content['record']->linkedin_check == 1) {
            return redirect($content['record']->linkedin);
        }
        elseif ((int)$content['record']->instagram_check == 1) {
            return redirect($content['record']->instagram);
        } elseif ((int)$content['record']->tiktok_check == 1) {
            return redirect($content['record']->tiktok);
        } else {
            $parent_id=User::find($id)->parent_id;
            $content["companyInfo"]=User::find($parent_id);
            return view('front.profile',$content);
        }
        } else {
            return redirect('/');
        }
    }

    public function vcards()
    {
        if(!empty(request()->action)) {
            $query = User::findOrFail(request()->id);
            $vcardExport = new \App\VcardExport;
            $vcardExport->contactVcardExportService($query);
            exit;
        }
    }

    public function uploadProfilePic(Request $request, $id)
    {
        if (!empty($request->get('profile_picture'))) {
            $record = User::find($id);
            $image_path = User::where('id',$id)->first()->profile_picture;
            if (\File::exists($image_path)) {
                \File::delete($image_path);
            }
            echo request()->get('profile_picture');
            list($type,$image) = explode(";",$request->get('profile_picture'));
            list(,$image)=explode(",",$image);
            $profile_picture=base64_decode($image);
            //$image = rand().'.'.$profile_picture->getClientOriginalExtension();
            $image = rand().'.'.explode("/",$type)[1];
            //$profile_picture->move(public_path('assets/admin/images'),$image);
            file_put_contents(public_path('assets/admin/images/'.$image),$profile_picture);
            $profile_picture = 'assets/admin/images/'.$image;
            $record->profile_picture = $profile_picture;
            $record->save();
            echo "Profile Picture Updated Successfully.";
        }
    }

    public function uploadCoverPic(Request $request, $id)
    {
        if (!empty($request->get('cover_image'))) {
            $record = User::find($id);
            $image_path = User::where('id',$id)->first()->cover_image;
            //$cover_position=$request->get("cover_top");
            if (\File::exists($image_path)) {
                \File::delete($image_path);
            }
            $cover_image = $request->get('cover_image');
            list($type,$image)=explode(";",$cover_image);
            list(,$image)=explode(",",$image);
            $cover_image=base64_decode($image);
            //$image = rand().'.'.$cover_image->getClientOriginalExtension();
            $image = rand().'.'.explode("/",$type)[1];
            //$cover_image->move(public_path('assets/admin/images'),$image);
            file_put_contents(public_path('assets/admin/images/'.$image),$cover_image);
            $cover_image = 'assets/admin/images/'.$image;
            $record->cover_image = $cover_image;
            //$record->cover_pos = (int)$cover_position;
            $record->save();
            echo "Profile Picture Updated Successfully.";
        }
    }

    public function editProfile($id)
    {
        $content['record'] = User::findOrFail($id);
        return view('auth.register-edit',$content);
    }

    public function updateProfile(Request $request, $id)
    {
//        dd($request->all());

        event(new Registered($user = $this->updated($request->all(),$id)));

        return redirect()->route('pro',$id)->with('success','Updated Successfully');
    }

    protected function updated(array $data,$id)
    {
        return User::where('id',$id)->update([
            'role_id' => 2,
            'first_name' => $data['first_name']??"",
            'last_name' => $data['last_name']??"",
            'job_title' => $data['job_title']??"",
            'company_name' => $data['company_name']??"",
            'company_description' => $data['company_description']??"",
            'contact_number' => $data['contact_number']??"",
            'mobile_number' => $data['mobile_number']??"",
            'mobile_check' => $data['mobile_check']??"",
            'email' => $data['email']??"",
            'address' => $data['address']??"",
            'state' => $data['state']??"",
            'city' => $data['city']??"",
            'province' => $data['province']??"",
            'zipcode' => $data['zipcode']??"",
            'website' => $data['website']??"",
            'website_check' => $data['website_check']??"",
            'website_address' => $data['website_address']??"",
            'linkedin' => $data['linkedin']??"",
            'linkedin_check' => $data['linkedin_check']??"",
            'instagram' => $data['instagram']??"",
            'instagram_check' => $data['instagram_check']??"",
            'facebook' => $data['facebook']??"",
            'facebook_check' => $data['facebook_check']??"",
            'tiktok' => $data['tiktok']??"",
            'tiktok_check' => $data['tiktok_check']??"",
            'acc_type'=>$data['acc_type'],
        ]);
    }
    public function register(Request $request)
    {
        $check=$this->validator($request->all());
        if($check->fails()) {

            $request->session()->flashInput($request->input());
            return view("auth.register",["type"=>request()->session()->get("acc_type")])->with(
                'errors',
                (new ViewErrorBag())->put('default', $check->getMessageBag())
            );
        }
        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);
        return auth()->user()->role_id===5?redirect('/admin'):redirect($this->redirectTo($user));

    }

    public function validator(array $data)
    {
        return Validator::make($data,[
            'first_name' => ['required', 'string', 'max:255'],
            'job_title' => ['required','string','max:255'],
            'company_name' => ['required','string','max:255'],
            'company_description' => ['required','string'],
            'mobile_number' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'acc_type'=>['required'],
        ]);
    }

    public function create(array $data)
    {
        $request = request();
        $profile_picture = "";
        if (!empty($request->file('profile_picture'))) {
            $profile_picture = $request->file('profile_picture');
            $image = rand().'.'.$profile_picture->getClientOriginalExtension();
            $profile_picture->move(public_path('assets/admin/images'),$image);
            $profile_picture = 'assets/admin/images/'.$image;
        }

        $cover_image = "";
        if (!empty($request->file('cover_image'))) {
            $cover_image = $request->file('cover_image');
            $image = rand().'.'.$cover_image->getClientOriginalExtension();
            $cover_image->move(public_path('assets/admin/images'),$image);
            $cover_image = 'assets/admin/images/'.$image;
        }

        return User::create([
            'role_id' => ($data["acc_type"] == 'personal') ? 2 : 5,
            'first_name' => $data['first_name']??"",
            'last_name' => $data['last_name']??"",
            'job_title' => $data['job_title']??"",
            'company_name' => $data['company_name']??"",
            'company_description' => $data['company_description']??"",
            'contact_number' => $data['contact_number']??"",
            'mobile_number' => $data['mobile_number']??"",
            'mobile_check' => $data['mobile_check']??"",
            'email' => $data['email']??"",
            'address' => $data['address']??"",
            'state' => $data['state']??"",
            'city' => $data['city']??"",
            'province' => $data['province']??"",
            'zipcode' => $data['zipcode']??"",
            'website' => $data['website']??"",
            'website_check' => $data['website_check']??"",
            'website_address' => $data['website_address']??"",
            'linkedin' => $data['linkedin']??"",
            'linkedin_check' => $data['linkedin_check']??"",
            'instagram' => $data['instagram']??"",
            'instagram_check' => $data['instagram_check']??"",
            'facebook' => $data['facebook']??"",
            'facebook_check' => $data['facebook_check']??"",
            'cover_image' => $cover_image,
            'profile_picture' => $profile_picture,
            'password' => Hash::make($data['password']),
            'acc_type' => $data["acc_type"],
        ]);
    }

    protected function guard() {
        return Auth::guard();
    }

    public function redirectTo($user)
    {
        return route('pro',$user->id);
    }

    public function changePassword(PasswordValidationForm $request, $id)
    {
        User::where('id',$id)->update([
            'password' => Hash::make($request->input('password')),
        ]);
       /* $record = new User::findOrFail($id);
        $record->password = Hash::make($request->input('password'));
        $record->save();*/
        return redirect()->route('pro',$id)->with('success','Password Updated Successfully.');
    }

    public function viewChangePassword($id)
    {
        return view('auth.change-password');
    }


    public function save_employees(){
        $password="45".request()->get("f_name")."23".request()->get("title");
         User::create([
            'role_id' => 2,
            'first_name' => request()->get("f_name")??"",
            'last_name' => request()->get("l_name")??"",
            'job_title' => request()->get("title")??"",
            'company_name' => "",
            'company_description' => "",
            'contact_number' => request()->get("phone")??"",
            'mobile_number' => request()->get("phone")??"",
            'mobile_check' => "Mobile",
            'email' => request()->get("email"),
            'address' => request()->get("location")??"",
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
         $user=User::find(request()->get("parent_id"));
         Mail::to(request()->get("email"))->send(new CreateEmployeeMail($user->company_name,request()->get("email"),$password));
         return $user->email;
    }

    public function update_employees($id){
        $password="45".request()->get("f_name")."23".request()->get("title");
        return User::where("id",$id)->update([
            'role_id' => 2,
            'first_name' => request()->get("f_name"),
            'last_name' => request()->get("l_name"),
            'job_title' => request()->get("title"),
            'company_name' => "",
            'company_description' => "",
            'contact_number' => request()->get("phone")??"",
            'mobile_number' => request()->get("phone")??"",
            'mobile_check' => "Mobile",
            'email' => request()->get("email")??"",
            'address' => request()->get("location")??"wetewt",
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

    }


    public function save_account(){
        $password=\Illuminate\Support\Str::random(16);
        User::create([
            'role_id' => request()->get("acc_type")=="company"?5:2,
            'first_name' => request()->get("ind_f_name"),
            'last_name' => request()->get("ind_l_name"),
            'job_title' => "",
            'company_name' => request()->get("company_name")??"",
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


    public function device_profile($user_id,$id){
        $device=device::where('profile_url',route('device_profile',["user_id"=>$user_id,"id"=>$id]))->firstOrfail();
        return redirect($device->redirected_url);
    }


}
