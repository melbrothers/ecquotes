<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => [
                'id' => $this->id,
                'email' => $this->email,
                'title' => $this->title,
                'firstName' => $this->first_name,
                'lastName' => $this->last_name,
                'gender' => $this->gender,
                'dob' => $this->dob,
                'mobile' => $this->mobile,
                'landline' => $this->landline,
                'abn' => $this->abn,
                'licence' => $this->licence,
                'address1' => $this->address1,
                'address2' => $this->address2,
                'suburb' => $this->suburb,
                'state' => $this->state,
                'postcode' => $this->postcode,
            ]
        ];
    }
}
