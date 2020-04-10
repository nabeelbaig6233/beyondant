<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->title = ucwords(str_replace('-',' ',request()->segment(2)));
    }

    public function index()
    {
        $content['title'] = $this->title;
        if (request()->ajax()) {
            return datatables()->of(User::latest()->where('role_id','<>',2)->get())
                ->addColumn('image',function($data){
                    return '<img width="65" src="'.asset(!empty($data->profile_picture)?$data->profile_picture:'assets/admin/images/placeholder.png').'">';
                })->addColumn('checkbox',function($data){
                    return '<input type="checkbox" class="delete_checkbox" value="'.$data->id.'">';
                })->addColumn('action',function($data){
                    return '<a data-col="1" title="Edit" href="user/edit/'.$data->id.'" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>&nbsp;<button data-col="2" data-row="' . $data->id . '" title="View" type="button" name="view" id="'.$data->id.'" class="views btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button data-col="3" data-row="' . $data->id . '" title="Delete" type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                })->rawColumns(['checkbox','action','image'])->make(true);
        }
        return view('admin.'.request()->segment(2).'.list')->with($content);
    }

    public function register() {
        $content['title'] = $this->title;
        $role = new \App\models\role;
        $content['role'] = $role->getRole();
        return view('admin.users.form')->with($content);
    }

    public function edit($id) {
        $content['title'] = $this->title;
        $content['record'] = User::findOrFail($id);
        $role = new \App\models\role;
        $content['role'] = $role->getRole();
        return view('admin.users.edit')->with($content);
    }

    public function update(Request $request, $id)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->updated($request->all(),$id)));

        return redirect()->back()->with('success','Updated Successfully');
    }

    protected function validator(array $data)
    {
        $validations=$data["role_id"]!==5?[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'confirmed'],
            'contact_number' => ['required','string'],
            'role_id' => ['required','numeric'],
        ]:[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string','confirmed'],
            'contact_number' => ['required','string'],
            'role_id' => ['required','numeric'],
            'company_name'=>['required'],
            'company_description'=>['required'],
            'website'=>['required']
        ];
        return Validator::make($data, $validations);
    }
    protected function updated(array $data,$id)
    {
        $request = request();
        $profile_picture = '';
        if (!empty($request->file('profile_picture'))) {
            $profile_picture = $request->file('profile_picture');
            $image = rand().'.'.$profile_picture->getClientOriginalExtension();
            $profile_picture->move(public_path('assets/admin/images'),$image);
            $profile_picture = 'assets/admin/images/'.$image;
        }

        $cover_image = '';
        if (!empty($request->file('cover_image'))) {
            $cover_image = $request->file('cover_image');
            $image = rand().'.'.$cover_image->getClientOriginalExtension();
            $cover_image->move(public_path('assets/admin/images'),$image);
            $cover_image = 'assets/admin/images/'.$image;
        }

        $name=explode(' ',$data["name"]);
        $f_name=$name[0];
        $l_name='';
        for($n=1;$n<count($name);$n++){$l_name.=$name[$n];}

        $profile_check=$data["check"];
        $profiles=[];
        $profiles["website"]=[0,$data["website"]??""];
        $profiles["linkdin"]=[0,$data["linkdin"]??""];
        $profiles["facebook"]=[0,$data["facebook"]??""];
        $profiles["instagram"]=[0,$data["instagram"]??""];
        $profiles["tiktok"]=[0,$data["tiktok"]??""];
        if($profile_check=="website"){
            $profiles["website"]=[1,$data["website"]];
        }else if($profile_check=="linkdin"){
            $profiles["linkdin"]=[1,$data["linkdin"]];
        }else if($profile_check=="facebook"){
            $profiles["facebook"]=[1,$data["facebook"]];
        }else if($profile_check=="instagram"){
            $profiles["instagram"]=[1,$data["instagram"]];
        }else if($profile_check=="tiktok") {
            $profiles["tiktok"] = [1, $data["tiktok"]];
        }


        $updateQuery=$data["role_id"]!=5?User::where('id',$id)->update([
            'first_name' => $f_name,
            'last_name' => $l_name,
            'email' => $data['email'],
            'contact_number' => $data['contact_number'],
            'occupation' => $data['occupation'],
            'role_id' => $data['role_id'],
            'profile_picture' => !empty($profile_picture)?$profile_picture:User::find($id)->profile_picture,
            'password' => Hash::make($data['password']),
        ]): User::where('id',$id)->update([
                    'first_name' => $f_name,
                    'last_name'=>$l_name,
                    'email' => $data['email'],
                    'contact_number' => $data['contact_number'],
                    'occupation' => $data['occupation'],
                    'role_id' => $data['role_id'],
                    'profile_picture' => !empty($profile_picture)?$profile_picture:User::find($id)->profile_picture,
                    'cover_image' => !empty($cover_image)?$cover_image:User::find($id)->cover_image,
                    'password' => Hash::make($data['password']),
                    'company_name'=>$data["company_name"],
                    'company_description'=>$data["company_description"],
                    'address'=>$data["address"]??"",
                    'state'=>$data["state"]??"",
                    'city'=>$data["city"]??"",
                    'province'=>$data["province"]??"",
                    'zipcode'=>$data["zipcode"]??"",
                    'website'=>$data["website"],
                    'website_check'=>$profiles["website"][0],
                    'linkedin_check'=>$profiles["linkdin"][0],
                    'linkedin'=>$profiles["linkdin"][1],
                    'facebook_check'=>$profiles["facebook"][0],
                    'facebook'=>$profiles["facebook"][1],
                    'instagram_check'=>$profiles["instagram"][0],
                    'instagram'=>$profiles["instagram"][1],
                    'tiktok_check'=>$profiles["tiktok"][0],
                    'tiktok'=>$profiles["tiktok"][1],
                ]);

        return $updateQuery;
    }

    public function delete_all(Request $request)
    {
        dd($request->input('checkboxValue'));
    }
}
