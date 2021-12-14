<?php

namespace App\Http\Controllers\Carousel;

use App\Http\Controllers\Controller;
use App\Core\Traits\ResponseTrait;
use App\Http\Repositories\Carousel\CarouselRepository;
use App\Http\Requests\Carousel\CarouselRequest;
use App\Http\Resources\Carousel\CarouselResource;

class CarouselController extends Controller
{
    protected $carouselRepository;
    use ResponseTrait;

    public function __construct()
    {
        $this->carouselRepository = new CarouselRepository();
    }

    public function uploadCarouselImages(CarouselRequest $request)
    {
        try {
            $carousel = $this->carouselRepository->uploadCarouselImages($request->get('title'), $request->file('image'));
            return $this->responseGet('Carousel Uploaded Successfully', CarouselResource::make($carousel));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), null, $e->getCode());
        }
    }

    public function getCarouselImages()
    {
        try {
            $users = $this->carouselRepository->CarouselQuery();
            return $this->responseGet('All Carousel Images', CarouselResource::collection($users));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), null, $e->getCode());
        }
    }
}
