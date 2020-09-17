<?php

namespace App\Http\Resources\Workout\Exercises;

use Illuminate\Http\Resources\Json\JsonResource;

class ExerciseResource extends JsonResource
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
            'image' => $this->image,
            'animation' => $this->animation,
            'video' => $this->video,
            'description' => $this->description,
            'tips' => $this->tips
        ];
    }
}
