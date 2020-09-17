<?php

namespace App\Http\Resources\Workout\Programs;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProgramCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = 'App\Http\Resources\Workout\Programs\ProgramResource';

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'programs' => $this->collection
        ];
    }
}
