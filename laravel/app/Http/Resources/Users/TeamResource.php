<?php

namespace App\Http\Resources\Users;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    /**
     * Generated token for user
     *
     * @var string|null $token
     */
    protected ?string $token;

    /**
     * TeamResource constructor.
     * @param $resource
     * @param string|null $token
     */
    public function __construct($resource, ?string $token = null)
    {
        parent::__construct($resource);

        $this->token = $token;
    }

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
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'nickname' => $this->nickname,
            'last_activity_at' => $this->last_activity_at,
            'image' => $this->image,
            'token' => $this->when($this->token, $this->token)
        ];
    }
}
