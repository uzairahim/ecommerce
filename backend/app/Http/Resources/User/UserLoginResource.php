<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Crypt;

class UserLoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $user = $this->resource;
        $output = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'access_token' => $user->token,
        ];
        if (empty($user->token)) {
            Arr::forget($output, 'access_token');
        }
        return $output;
    }
}
