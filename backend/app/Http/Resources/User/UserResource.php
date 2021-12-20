<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $studentData = $this->resource;
        return [
            'id' => $studentData->id,
            'name' => $studentData->name,
            'email' => $studentData->email,
        ];
    }
}
