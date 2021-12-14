<?php

namespace App\Http\Controllers\Product;

use App\Core\Traits\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Product\ProductRepository;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Resources\Product\ProductResource;

class ProductController extends Controller
{
    protected $productRepository;
    use ResponseTrait;

    public function __construct()
    {
        $this->productRepository = new ProductRepository();
    }

    public function uploadProductImages(ProductRequest $request)
    {
        try {
            $product = $this->productRepository->uploadProductImages($request->get('title'), $request->file('image'));
            return $this->responseGet('Product Uploaded Successfully', ProductResource::make($product));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), null, $e->getCode());
        }
    }

    public function getProductImages()
    {
        try {
            $users = $this->productRepository->ProductQuery();
            return $this->responseGet('All Products', ProductResource::collection($users));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), null, $e->getCode());
        }
    }

}
