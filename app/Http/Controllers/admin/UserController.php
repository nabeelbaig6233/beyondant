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
            return datatables()->of(User::latest()->get())
                ->addColumn('image',function($data){
                    return '<img width="65" src="'.asset(!empty($data->profile_picture)?$data->profile_picture:'assets/admin/images/placeholder.png').'">';
                })->addColumn('checkbox',function($data){
                    return '<input type="checkbox" class="delete_checkbox" value="'.$data->id.'">';
                })->addColumn('action',function($data){
                    return '<a title="Edit" href="user/edit/'.$data->id.'" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>&nbsp;<button title="View" type="button" name="view" id="'.$data->id.'" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'contact_number' => ['required','numeric'],
            'role_id' => ['required','numeric'],
        ]);
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
        return User::where('id',$id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'contact_number' => $data['contact_number'],
            'occupation' => $data['occupation'],
            'role_id' => $data['role_id'],
            'profile_picture' => $profile_picture,
            'password' => Hash::make($data['password']),
        ]);
    }

    public function delete_all(Request $request)
    {
        dd($request);
    }
}
