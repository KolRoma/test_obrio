<?php

namespace App\Http\Resources;

use App\Services\HelperFunctions;
use Illuminate\Http\Resources\Json\JsonResource;

class AstrologerCardResource extends JsonResource
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
            'first_name' => $this->first_name,
            'services' => $this->when($this->services->count() > 0, ServiceResource::collection($this->services)),
            'photo' => HelperFunctions::convertImageToBase64($this->photo->path, $this->photo->mime_type),
        ];
    }
}
