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
        return [
            'f_name' => 'required|string',
            'l_name' => 'required|string',
            'company' => 'required|string',
            'email' => 'required|string|unique:reseller',
            'website' => 'string',
            'address' => 'required|string',
            'address_line_two' => 'string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'postal_code' => 'required|string',
            'fed_tax_id' => 'string',
            'business_phone' => 'string',
            'business_status' => 'required|string',
            'business_status_description' => $business_status_description_validation,
            'date_organized' => 'required|date',
            'name_of_owner' => 'required|string',
            'num_of_locations' => 'numeric',
            'total_employees' => 'required|numeric',
            'sales_employees' => 'numeric',
            'brands' => 'required|string',
            'approx_turnover' => 'required|string',
            'approx_turnover_description' => $approx_turnover_description_validation,
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
