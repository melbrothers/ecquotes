<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LegalEntity extends JsonResource
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
            'id' => $this->id,
            'abn' => $this->abn,
            'business_name' => $this->business_name,
            'licence' => $this->licence,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'suburb' => $this->suburb,
            'state' => $this->state,
            'postcode' => $this->postcode,
        ];
    }
}
