<?php

namespace App\Http\Resources\Workout\Exercises;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ExerciseCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = 'App\Http\Resources\Workout\Exercises\ExerciseResource';

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'exercises' => $this->collection
        ];
    }
}
