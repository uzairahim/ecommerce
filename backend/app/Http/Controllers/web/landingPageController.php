<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Product\ProductRepository;
use Illuminate\Http\Request;

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
        return view('home.index')->with('data', $rateProducts);
    }

    public function productDetails(Request $request)
    {
        $data = [];
        $product_name = $request->path();
        if ($product_name == 'safety_horn'){
            $data = $this->safety_horn();
        }
//        dd($data);
        return view('product-description')->with(['data'=>$data]);
    }

    public function safety_horn()
    {
        $title = 'SAFETY HORN (SF 110)';
        $description = "Safty horn is specially designed for vehicles without air compressor, loading vehicles, passengers vehicles, SUVs, pickups and all other mid level vehicles require special signaling instrument according to their size and weight, we categories horns into three layers, lower layer is Bike/Cars for which many models of disk horn and small snail horns are available, upper layer is Buses, Trucks,\n All kind of heavy vehicles with air compressor on board, many loud air horns of different types and models are available for the vehicle with air compressor on board, we do not see much verity for mid layer like loading vehicles, passengers vehicles, SUV's, mini trucks ie, Safty horn is best applicable for mid layer, although can be used for all 3 layers.";
        $footer = "SF-110 is available for 12V or 24V, SF-110 is the best product available in this category around the world, we focus on quality of every single part used, solenoid coils are of cooper winding ";
        $specifications = [
            'Voltage' => '12 or 24',
            'Speaker Design' => '2 way',
            'Outer Material' => 'Iron',
            'Inner Material' => 'Cooper',
            'Place of Origin' => 'Pakistan',
            'Brand Name' => 'MSK',
            'Model Number' => 'SF-110',
            'Warranty' => '12 Months',
            'Product Name' => 'Safty Horn',
            'Type' => 'Universal Car Horn',
            'MOQ' => '1 Carton',
            'Color' => 'Black / Red',
            'Application' => 'All 12V/24V Vehicles',
            'Usage' => 'Any vehicle or bike',
            'Sound level' => '130 DB',
            'Package' => 'Box',
            'Keyword' => 'Snail horn',
            'Size' => 'Width x Height x Length',
            'Wwight' => '1.9KG',
            'Pitch' => 'High/Low'
        ];
        $side_images = [
            'safety_horn' => 'assets/images/safety_horn/safety_horn.png',
            'safety_horn_1' => 'assets/images/safety_horn/safety_horn_1.png',
            'safety_horn_2' => 'assets/images/safety_horn/safety_horn_2.png',
//            'safety_horn_3' => 'assets/images/safety_horn/safety_horn_3.png',
            'safety_horn_4' => 'assets/images/safety_horn/safety_horn_4.png',
//            'safety_horn_5' => 'assets/images/safety_horn/safety_horn_5.png',
//            'safety_horn_6' => 'assets/images/safety_horn/safety_horn_6.png',
//            'safety_horn_7' => 'assets/images/safety_horn/safety_horn_7.png',
//            'safety_horn_8' => 'assets/images/safety_horn/safety_horn_8.png',
        ];
        $data = [
            'title' => $title,
            'main_image' => 'assets/images/safety_horn/safety_horn.png',
            'side_images' => $side_images,
            'description' => $description,
            'footer' => $footer,
            'specifications' => $specifications
        ];
        return $data;
    }
}
