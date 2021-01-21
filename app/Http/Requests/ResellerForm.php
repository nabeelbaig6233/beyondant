<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class ResellerForm extends FormRequest
{
    public function rules(Request $request)
    {
        $business_status_description_validation = $request->input('business_status') === 'Other (Please Specify)' ? 'required|string' : '';
        $approx_turnover_description_validation = $request->input('approx_turnover') === 'Other (Please Specify)' ? 'required|string' : '';
        $fed_tax_id = $request->input("business_status") === 'No Business Formed'?'':'string|min:4|max:4'; 
        
        
        return [
            'f_name' => 'required|string',
            'l_name' => 'required|string',
            'email' => 'required|string|unique:reseller',
            'password' => 'required|min:8',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'postal_code' => 'required|string',
            'fed_tax_id' => $fed_tax_id,
            'business_status' => 'required|string',
            'business_status_description' => $business_status_description_validation,
            //'num_of_locations' => 'numeric',
            //'approx_turnover' => 'required|string',
           // 'approx_turnover_description' => $approx_turnover_description_validation,
            'beyondant_promotion' => 'required|date',
            'preferred_territory' => 'required|string',
            'about_beyondant' => 'required|string',
            'short_paragraph' => 'required|string',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
