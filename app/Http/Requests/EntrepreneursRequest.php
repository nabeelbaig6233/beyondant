<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class EntrepreneursRequest extends FormRequest
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
            'email' => 'required|string|unique:reseller',
            'address' => 'required|string',
            'city' => '',
            'state' => '',
            'country' => '',
            'postal_code' => '',
            'fed_tax_id' => 'string|min:4|max:4',
            'business_status' => 'required|string',
            'business_status_description' => $business_status_description_validation,
            'num_of_websites' => 'numeric',
            'approx_turnover' => 'required|string',
            'approx_turnover_description' => $approx_turnover_description_validation,
            'beyondant_promotion' => 'required|date',
            'current_primary_web_url' => 'required',
            'about_beyondant' => 'required|string',
            'short_paragraph' => 'required|string',
        ];
    }
}
