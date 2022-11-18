<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RequestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'service_type' => $this->service_type,
            'time' => $this->created_at->format('d-m-Y'),
            'description' => $this->description,
            'upload_photo' => $this->upload_photo
        ];
    }
}
