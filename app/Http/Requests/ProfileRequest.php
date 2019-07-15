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
            'abn' => 'required',
            'licence' => 'required',
            'address1' => 'required',
            'address2' => 'nullable',
            'suburb' => 'required',
            'state' => 'required',
            'postcode' => 'required'
        ];
    }
}
