<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DataItem extends JsonResource
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
            'id'            => $this->id,
            'type'          => DataItemType::collection($this->type_id),
            'user'          => User::collection($this->whenLoaded('user')),
            'collection'    => DataItemList::collection($this->whenLoaded('collection')),
            'json_data'     => $this->json_data,
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,
        ];
    }
}
