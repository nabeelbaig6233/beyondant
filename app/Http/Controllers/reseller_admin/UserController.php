<?php

namespace App\Http\Controllers\reseller_admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResellerEditProfile;
use App\models\reseller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){}

    public function edit(){
        $reseller=reseller::find(auth()->guard('reseller')->user()->id);
        return view('reseller.admin.users.edit',['record'=>$reseller]);
    }

    public function update(ResellerEditProfile $request)
    {

        $id=auth()->guard('reseller')->user()->id;
        $reseller=reseller::find($id);
        $profile_picture = '';
        if (!empty($request->file('profile_picture'))) {
            $profile_picture = $request->file('profile_picture');
            $image = rand().'.'.$profile_picture->getClientOriginalExtension();
            $profile_picture->move(public_path('assets/admin/images'),$image);
            $profile_picture = 'assets/admin/images/'.$image;
        }else{
            $profile_picture=$reseller->profile_picture;
        }
        $reseller->f_name=$request->get('f_name') ?? '';
        $reseller->l_name=$request->get('l_name') ?? '';
        $reseller->profile_picture=$profile_picture;
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
        return redirect('/reseller/admin/')->with("success","ThankYou Your Reseller Page Have Been Update");
    }
}
