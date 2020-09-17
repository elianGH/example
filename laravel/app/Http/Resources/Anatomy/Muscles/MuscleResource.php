<?php

namespace App\Http\Resources\Anatomy\Muscles;

use Illuminate\Http\Resources\Json\JsonResource;

class MuscleResource extends JsonResource
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
            'body_part' => $this->body_part,
        ];
    }
}
