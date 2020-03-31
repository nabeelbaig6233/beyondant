<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Requests\PasswordValidationForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index($id)
    {
        $content['record'] = User::where([['role_id','=',2],['id','=',$id]])->first();
//        dd($content['record']);
        if (!empty($content['record'])) {
            if (Auth::check() == true) {
                return view('front.profile',$content);
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
        if (!empty($request->file('profile_picture'))) {
            $record = User::find($id);
            $image_path = User::where('id',$id)->first()->profile_picture;
            if (\File::exists($image_path)) {
                \File::delete($image_path);
            }
            $profile_picture = $request->file('profile_picture');
            $image = rand().'.'.$profile_picture->getClientOriginalExtension();
            $profile_picture->move(public_path('assets/admin/images'),$image);
            $profile_picture = 'assets/admin/images/'.$image;
            $record->profile_picture = $profile_picture;
            $record->save();
            echo "Profile Picture Updated Successfully.";
        }
    }

    public function uploadCoverPic(Request $request, $id)
    {
        if (!empty($request->file('cover_image'))) {
            $record = User::find($id);
            $image_path = User::where('id',$id)->first()->cover_image;
            if (\File::exists($image_path)) {
                \File::delete($image_path);
            }
            $cover_image = $request->file('cover_image');
            $image = rand().'.'.$cover_image->getClientOriginalExtension();
            $cover_image->move(public_path('assets/admin/images'),$image);
            $cover_image = 'assets/admin/images/'.$image;
            $record->cover_image = $cover_image;
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
        ]);
    }
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);
        return redirect($this->redirectTo($user));
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
            'password' => Hash::make($data['password'])
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
}
