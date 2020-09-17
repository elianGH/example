<?php

namespace App\Http\Resources\Workout\Equipments;

use Illuminate\Http\Resources\Json\JsonResource;

class EquipmentResource extends JsonResource
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
            'title' => $this->title,
            'active' => $this->active,
            'sort' => $this->sort,
            'image' => $this->image
        ];
    }
}
