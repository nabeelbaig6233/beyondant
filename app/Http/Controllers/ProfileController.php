<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index($id)
    {
        $content['record'] = User::where([['role_id','=',2],['id','=',$id]])->first();
        if (!empty($content['record'])) {
        if ($content['record']->facebook_check == '1') {
            return redirect($content['record']->facebook);
        } elseif ($content['record']->linkedin_check == '1') {
            return redirect($content['record']->linkedin);
        } elseif ($content['record']->instagram_check == '1') {
            return redirect($content['record']->instagram);
        } else {
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
    public function register(Request $request)
    {
//        dd($request->all());
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);
        return redirect($this->redirectTo($user));
    }

    public function validator(array $data)
    {
        return Validator::make($data,[
            'name' => ['required', 'string', 'max:255'],
            'job_title' => ['required','string','max:255'],
            'company_name' => ['required','string','max:255'],
            'company_description' => ['required','string'],
            'mobile_number' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'address' => ['required', 'string', 'max:255'],
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
            'role_id' => 2,
            'name' => $data['name']??"",
            'job_title' => $data['job_title']??"",
            'company_name' => $data['company_name']??"",
            'company_description' => $data['company_description']??"",
            'contact_number' => $data['contact_number']??"",
            'mobile_number' => $data['mobile_number']??"",
            'fax_number' => $data['fax_number']??"",
            'email' => $data['email']??"",
            'address' => $data['address']??"",
            'website' => $data['website']??"",
            'website_address' => $data['website_address']??"",
            'linkedin' => $data['linkedin']??"",
            'linkedin_check' => $data['linkedin_check']??"",
            'instagram' => $data['instagram']??"",
            'instagram_check' => $data['instagram_check']??"",
            'facebook' => $data['facebook']??"",
            'facebook_check' => $data['facebook_check']??"",
            'cover_image' => $cover_image,
            'profile_picture' => $profile_picture,
        ]);
    }

    protected function guard() {
        return Auth::guard();
    }

    public function redirectTo($user)
    {
        return route('pro',$user->id);
    }
}
