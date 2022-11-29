<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'status' => $this->status,
            'request_details' => $this->resource->request->description,
            'offer_details' => $this->resource->offer->details,
            'name' => $this->resource->request->user->first_name." ".$this->resource->request->user->last_name,
            'upload_photo' => $this->resource->request->user->upload_photo,
            'service_type' => $this->resource->request->service_type,
            'location' => $this->resource->request->location,
            'service_cost' => $this->resource->offer->service_cost,
            'due_time' => $this->resource->offer->due_time,
        ];
    }
}
