<?php

namespace App\Http\Repositories\Product;

use App\Core\Repositories\Repository;
use App\Models\Carousel;
use App\Models\Product;
use App\Models\RatedProduct;

class ProductRepository extends Repository
{
    public function ProductQuery()
    {
        $query=Product::all();
        return $query;
    }

    public function RatedProductQuery(String $type)
    {
        $query=RatedProduct::where('type',$type)->orderBy('type')->orderBy('id')->get();
        return $query;
    }

    public function uploadProductImages($title, $image)
    {
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('products'), $imageName);
        $product = new Product;
        $product->title = $title;
        $product->image = $imageName;
        $product->save();
        return $product;
    }

    public function uploadRatedProductImages($request)
    {
        $image=$request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('rated_products'), $imageName);
        $product = new RatedProduct;
        $product->title = $request->get('title');
        $product->type = $request->get('type');
        $product->image = $imageName;
        $product->save();
        return $product;
    }
}

