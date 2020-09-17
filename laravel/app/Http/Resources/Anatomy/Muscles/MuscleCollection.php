<?php

namespace App\Http\Resources\Anatomy\Muscles;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MuscleCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = 'App\Http\Resources\Anatomy\Muscles\MuscleResource';

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'muscles' => $this->collection
        ];
    }
}
