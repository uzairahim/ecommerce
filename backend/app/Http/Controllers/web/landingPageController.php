<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Product\ProductRepository;

class landingPageController extends Controller
{
    protected $productRepository;

    public function __construct()
    {
        $this->productRepository = new ProductRepository();
    }

    public function getRatedProductImages()
    {
            $rateProducts['best_seller'] = $this->productRepository->RatedProductQuery('best_seller');
            $rateProducts['superb_products'] = $this->productRepository->RatedProductQuery('superb_products');
            return view('home.index')->with('data',$rateProducts);
    }

}
