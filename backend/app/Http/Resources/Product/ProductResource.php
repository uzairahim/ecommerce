<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $carousel = $this->resource;
        return [
            'id' => $carousel->id,
            'title' => $carousel->title,
            'image' => url('products').'/'.$carousel->image
        ];
    }
}
