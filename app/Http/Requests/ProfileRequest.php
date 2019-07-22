<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => 'required|string',
            'firstName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'mobile' => 'required',
            'landline' => 'required',
            'legal_entity.licence' => 'required',
            'legal_entity.address1' => 'required',
            'legal_entity.address2' => 'nullable',
            'legal_entity.suburb' => 'required',
            'legal_entity.state' => 'required',
            'legal_entity.postcode' => 'required'
        ];
    }
}
