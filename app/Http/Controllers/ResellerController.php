<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResellerEditProfile;
use App\models\home;
use App\models\reseller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ResellerForm;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResellerMail;

class ResellerController extends Controller
{
    public function index(ResellerForm $request)
    {
        $reseller_email = DB::table('setting')->where('id',1)->first()->reseller_email;
        $request->request->remove('_token');
        $master_id=$request->get('master_info')?$request->get('master_info'):0;
        $request->request->remove('master_info');
        $data=$request->all();
        $data['master_id']=$master_id;
        $data['password']=Hash::make($request->get('password'));
        DB::table('reseller')->insert($data);
        Mail::to($reseller_email)->send(new ResellerMail($request));
        return redirect()->route('home')->with('success','Thank you for your submission! Please allow 5 to 7 business days for processing.');
    }

    public function profile($id){
        $reseller=reseller::find($id);
        if(Auth::guard('reseller')->check()){
            if(auth()->guard('reseller')->user()->id!=$id) {
                return redirect()->route('reseller.profile', auth()->guard('reseller')->user()->id);
            }
            return view('reseller.front.profile', ["reseller" => $reseller]);
        }
        if(!empty($reseller)&&$reseller->status==1) {
            return view('reseller.front.profile', ["reseller" => $reseller]);
        }
        else{
            return redirect()->route('home')->with("error","Your Profile Is Under Process.");
        }
    }

    public function edit_reseller_profile(){
        $reseller=reseller::find(auth()->guard('reseller')->user()->id);
        return view('reseller.front.edit',['reseller'=>$reseller]);
    }

    public function referral_customers($id){
        $reseller=reseller::find($id);
        return redirect('/reseller')
                ->with('master_id',$reseller->id)
                ->with('first_name',$reseller->f_name)
                ->with('last_name',$reseller->last_name)
                ->with('discount_code',$reseller->discount_code);
    }

    public function update_reseller_profile(ResellerEditProfile $request)
    {
        $id=auth()->guard('reseller')->user()->id;
        $reseller=reseller::find($id);
        $reseller->f_name=$request->get('f_name') ?? '';
        $reseller->l_name=$request->get('l_name') ?? '';
        $reseller->company=$request->get('company') ?? '';
        $reseller->email=$request->get('email') ?? '';
        $reseller->password=Hash::make($request->get('password')) ?? '';
        $reseller->website=$request->get('website') ?? '';
        $reseller->address=$request->get('address') ?? '';
        $reseller->address_line_two=$request->get('address_line_two') ?? '';
        $reseller->city=$request->get('city') ?? '';
        $reseller->state=$request->get('state') ?? '';
        $reseller->country=$request->get('country') ?? '';
        $reseller->postal_code=$request->get('post_code') ?? '';
        $reseller->fed_tax_id=$request->get('fed_tax_id') ?? '';
        $reseller->business_phone=$request->get('business_phone') ?? '';
        $reseller->business_status=$request->get('business_status') ?? '';
        $reseller->business_status_description=$request->get('business_status_description') ?? '';
        $reseller->name_of_owner=$request->get('name_of_owner') ?? '';
        $reseller->total_employees=$request->get('total_employees') ?? '';
        $reseller->sales_employees=$request->get('sales_employees') ?? '';
        $reseller->approx_turnover_description=$request->get('approx_turnover_description') ?? '';
        $reseller->beyondant_promotion=$request->get('beyondant_promotion') ?? '';
        $reseller->preferred_territory=$request->get('preferred_territory') ?? '';
        $reseller->about_beyondant=$request->get('about_beyondant') ?? '';
        $reseller->short_paragraph=$request->get('short_paragraph') ?? '';
        $reseller->save();
        return redirect()->route('reseller.profile',$id)->with("success","ThankYou Your Reseller Page Have Been Update");
    }

    public function uploadProfilePic(Request $request)
    {
        if (!empty($request->get('profile_picture'))) {
            $record = reseller::find(auth()->guard('reseller')->user()->id);
            $image_path = $record->profile_picture;
            if (\File::exists($image_path)) {
                \File::delete($image_path);
            }
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

}
