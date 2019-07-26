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
            'address_line_1' => $this->address_line_1,
            'address_line_2' => $this->address_line_2,
            'suburb' => $this->suburb,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
        ];
    }
}
