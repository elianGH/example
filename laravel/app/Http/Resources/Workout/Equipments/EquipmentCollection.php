<?php

namespace App\Http\Resources\Workout\Equipments;

use Illuminate\Http\Resources\Json\ResourceCollection;

class EquipmentCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = 'App\Http\Resources\Workout\Equipments\EquipmentResource';

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'equipments' => $this->collection
        ];
    }
}
