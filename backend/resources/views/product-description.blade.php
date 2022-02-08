@extends('layout.header')
@section('content')
    <div id="page">
        @component('layout.head')@endcomponent
        <div style="background-color: #f1f1f1;padding-bottom:140px;">
            @component('layout.navbar')@endcomponent
        </div>
        <section class="main-container col1-layout wow bounceInUp animated">
            <div class="main container">
                <div class="col-main">
                    <div class="row">
                        <div class="product-view">
                            <div class="product-next-prev"><a class="product-next" href="#"><span></span></a> <a
                                    class="product-prev" href="#"><span></span></a></div>
                            <div class="product-essential">
                                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                                <div class="product-img-box col-sm-6 col-xs-12">
                                    <div class="new-label new-top-left"> New</div>
                                    <div class="product-image">
                                        <div class="large-image"><a href="{{asset($data['main_image'])}}"> <img
                                                    src="{{asset($data['main_image'])}}" alt="product image" id="main_product"> </a></div>
                                        <div class="flexslider flexslider-thumb">
                                            <ul class="previews-list slides">
                                                @foreach($data['side_images'] as $side_image)
                                                    <li>
                                                        <a href="javascript:void(0);" class='cloud-zoom-gallery' onclick="loadImage('{{asset($side_image)}}')">
                                                            <img src="{{asset($side_image)}}" style="height: 63px;"
                                                                 alt="Thumbnail 1"/>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end: more-images -->
                                </div>
                                <div class="product-shop col-sm-6 col-xs-12">
                                    <div class="product-name">
                                        <h1>{{$data['title']}}</h1>
                                    </div>
                                    <div class="short-description">
                                        <h2>Descripton</h2>
                                        <p>{!! nl2br($data['description']) !!}</p>
                                        <p>{{$data['footer']}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-collateral col-lg-12 col-sm-12 col-xs-12 bounceInUp animated">
                    <div class="add_info">
                        <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                            <li class="active"><a href="#product_tabs_description" data-toggle="tab" style="font-size: 20px"> Product
                                    Specifications </a></li>
                        </ul>
                        <div id="productTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="product_tabs_description">
                                <div class="row">
                                    @foreach($data['specifications'] as $key => $specifications)
                                        <div class="col-sm-4">
                                            <li style="font-size: 14px;"><b>{{$key}}</b>{{': '.$specifications}}</li>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
            <section class="main-container col1-layout wow bounceInUp animated">
                <div class="main container">
                    <div class="col-main">
                        <div class="row">
                            <img src="{{asset('assets/images/safety_horn/reference_image.jpeg')}}" alt="">
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/font-awesome.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/flexslider.css')}}">

    <script type="text/javascript" src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/js/jquery.flexslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/js/cloud-zoom.js')}}"></script>
    <script>
        function loadImage(src) {
            document.getElementById("main_product").src = src;
        }
    </script>
@endsection
