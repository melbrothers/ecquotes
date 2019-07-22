<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\LegalEntity as LegalEntityResource;

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
                'legal_entity' => new LegalEntityResource($this->legalEntity)
            ]
        ];
    }
}
