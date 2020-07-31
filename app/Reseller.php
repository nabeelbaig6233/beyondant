<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Reseller extends Authenticatable
{
    use Notifiable;

    protected $guard='reseller';
    protected $table="reseller";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'f_name', 'l_name', 'email', 'password', 'company', 'contact_number', 'website', 'address', 'address_line_two', 'city', 'state', 'country', 'postal_code', 'fed_tax_id',
        'business_phone', 'business_status', 'business_status_description', 'date_organized', 'name_of_owner', 'about_beyondant', 'num_of_locations', 'total_employees', 'sales_employees',
        'preferred_territory', 'brands', 'approx_turnover', 'approx_turnover_description', 'beyondant_promotion', 'short_paragraph', 'agreement', 'master_id', 'discount_code',
        'reseller_level', 'sponsor_name', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
