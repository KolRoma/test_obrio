<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'service' => $this->astrologerService->service->title,
            'astrologer' => $this->astrologerService->astrologer->first_name,
            'price' => $this->astrologerService->price,
        ];
    }
}
