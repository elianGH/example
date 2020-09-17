<?php

namespace App\Http\Resources\Users;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TeamCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = 'App\Http\Resources\Users\TeamResource';

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'teammates' => $this->collection
        ];
    }
}
