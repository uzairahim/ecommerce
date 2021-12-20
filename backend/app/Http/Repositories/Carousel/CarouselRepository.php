<?php

namespace App\Http\Repositories\Carousel;

use App\Core\Repositories\Repository;
use App\Models\Carousel;

class CarouselRepository extends Repository
{
    public function CarouselQuery()
    {
        $query=Carousel::all();
        return $query;
    }

    public function uploadCarouselImages($title, $image)
    {
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('carousel'), $imageName);
        $carousel = new Carousel;
        $carousel->title = $title;
        $carousel->image = $imageName;
        $carousel->save();
        $carousel->refresh();
        return $carousel;
    }
}

