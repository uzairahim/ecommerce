<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class AllProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $ratedProducts = $this->resource;
        return [
            'best_seller' => RatedProductResource::collection($ratedProducts['best_seller']),
            'superb_products' => RatedProductResource::collection($ratedProducts['superb_products']),
        ];
    }
}
