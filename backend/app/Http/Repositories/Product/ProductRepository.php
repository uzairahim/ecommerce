<?php

namespace App\Http\Repositories\Product;

use App\Core\Repositories\Repository;
use App\Models\Carousel;
use App\Models\Product;

class ProductRepository extends Repository
{
    public function ProductQuery()
    {
        $query=Product::all();
        return $query;
    }

    public function uploadProductImages($title, $image)
    {
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('products'), $imageName);
        $carousel = new Product;
        $carousel->title = $title;
        $carousel->image = $imageName;
        $carousel->save();
        $carousel->refresh();
        return $carousel;
    }
}

