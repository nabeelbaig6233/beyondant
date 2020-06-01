<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'first_name', 'last_name', 'email', 'password', 'contact_number', 'occupation', 'profile_picture', 'role_id', 'job_title', 'company_name', 'company_description', 'mobile_check', 'mobile_number', 'fax_number', 'website_address', 'address', 'state', 'city', 'province', 'zipcode', 'website', 'linkedin_check', 'instagram_check', 'facebook_check', 'linkedin', 'instagram', 'facebook', 'cover_image','acc_type','parent_id','reseller_code','website_check','tiktok_check','tiktok',
        'overridden_profile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
