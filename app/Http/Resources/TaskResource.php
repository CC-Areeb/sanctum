<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use PhpParser\Node\Expr\Cast\String_;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'attributes' => [
                'name' => $this->name,
                'description' => $this->description,
                'prioirity' => $this->prioirity,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],

            'relationships' => [
                'id' => (string)$this->user->id,
                'user name' => $this->user->name,
                'user email' => $this->user->email,
            ]
        ];
    }
}
