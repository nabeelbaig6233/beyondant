<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ResellerEditProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        $business_status_description_validation = $request->input('business_status') === 'Other (Please Specify)' ? 'required|string' : '';
        $approx_turnover_description_validation = $request->input('approx_turnover') === 'Other (Please Specify)' ? 'required|string' : '';
        return [
            'f_name' => 'required|string',
            'l_name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'postal_code' => 'required|string',
            'fed_tax_id' => 'string|min:4|max:4',
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
}
