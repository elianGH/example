<?php

namespace App\Http\Resources\Workout\Programs;

use Illuminate\Http\Resources\Json\JsonResource;

class ProgramResource extends JsonResource
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
            'description' => $this->description,
            'restrictions' => $this->restrictions,
            'cover_image' => $this->cover_image,
            'difficulty' => $this->difficulty,
            'duration' => $this->duration,
            'age' => $this->age,
            'body_type' => $this->body_type,
            'sex' => $this->sex
        ];
    }
}
