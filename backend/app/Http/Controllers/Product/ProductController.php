<?php

namespace App\Http\Controllers\Product;

use App\Core\Traits\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Product\ProductRepository;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Resources\Product\AllProductResource;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Product\RatedProductResource;

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
            $products = $this->productRepository->ProductQuery();
            return $this->responseGet('All Products', ProductResource::collection($products));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), null, $e->getCode());
        }
    }

    public function uploadRatedProductImages(ProductRequest $request)
    {
        try {
            $product = $this->productRepository->uploadRatedProductImages($request);
            return $this->responseGet('Product Uploaded Successfully', RatedProductResource::make($product));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), null, $e->getCode());
        }
    }

    public function getRatedProductImages()
    {
        try {
            $rateProducts['best_seller'] = $this->productRepository->RatedProductQuery('best_seller');
            $rateProducts['superb_products'] = $this->productRepository->RatedProductQuery('superb_products');
            return $this->responseGet('All Rated Products', AllProductResource::make($rateProducts));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), null, $e->getCode());
        }
    }

}
