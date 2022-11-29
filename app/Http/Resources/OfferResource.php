<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OfferResource extends JsonResource
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
            'id' => $this->id,
            'uuid' => $this->uuid,
            'name' => $this->resource->user->first_name." ".$this->resource->user->last_name,
            'request_description' => $this->resource->request->description,
            'profile_photo' => $this->resource->user->upload_photo,
            'user_id' => $this->user_id,
            'request_id' => $this->request_id,
            'service_cost' => $this->service_cost,
            'due_time' => $this->due_time,
            'details' => $this->details,
            'service_type' => $this->resource->request->service_type,
            'location' => $this->resource->request->location,    
        ];
    }
}
