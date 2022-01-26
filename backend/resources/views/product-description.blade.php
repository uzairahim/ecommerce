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
                                <div class="product-img-box col-sm-4 col-xs-12">
                                    <div class="new-label new-top-left"> New</div>
                                    <div class="product-image">
                                        <div class="large-image"><a href="{{url($data['main_image'])}}" class="cloud-zoom" id="zoom1"> <img
                                                    src="{{url($data['main_image'])}}" alt="product image"> </a></div>
                                        <div class="flexslider flexslider-thumb">
                                            <ul class="previews-list slides">
                                                <li>
                                                    <a href="{{asset($data['main_image'])}}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset($data['main_image'])}}' ">
                                                        <img src="{{asset($data['main_image'])}}" alt="Thumbnail 1"/>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{asset('assets/images/best_seller3.png')}}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('assets/images/best_seller3.png')}}' ">
                                                        <img src="{{asset('assets/images/best_seller3.png')}}" alt="Thumbnail 1"/>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end: more-images -->
                                </div>
                                <div class="product-shop col-sm-8 col-xs-12">
                                    <div class="product-name">
                                        <h1>{{$data['title']}}</h1>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:60%" class="rating"></div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <div class="price-box">
                                            <p class="special-price"><span class="price-label">Special Price</span>
                                                <span id="product-price-48" class="price"> $309.99 </span></p>
                                            <p class="old-price"><span class="price-label">Regular Price:</span> <span
                                                    class="price"> $315.99 </span></p>
                                        </div>
                                        <p class="availability in-stock pull-right"><span>In Stock</span></p>
                                    </div>
                                    <div class="short-description">
                                        <h2>Descripton</h2>
                                        <p>{{$data['description']}}</p>
                                        <p>{{$data['footer']}}</p>
                                    </div>
                                    {{--                                            <div class="add-to-box">--}}
                                    {{--                                                <div class="add-to-cart">--}}
                                    {{--                                                    <div class="pull-left">--}}
                                    {{--                                                        <div class="custom pull-left">--}}
                                    {{--                                                            <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>--}}
                                    {{--                                                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">--}}
                                    {{--                                                            <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                    <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <div class="email-addto-box">--}}
                                    {{--                                                    <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>--}}
                                    {{--                                                    <ul class="add-to-links">--}}
                                    {{--                                                        <li> <a class="link-wishlist" href="#"><span>Add to Wishlist</span></a></li>--}}
                                    {{--                                                        <li><span class="separator">|</span> <a class="link-compare" href="#"><span>Add to Compare</span></a></li>--}}
                                    {{--                                                    </ul>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-collateral col-lg-12 col-sm-12 col-xs-12 bounceInUp animated">
                    <div class="add_info">
                        <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                            <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Specifications </a> </li>
                        </ul>
                        <div id="productTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="product_tabs_description">
                                <div class="row">
                                    @foreach($data['specifications'] as $key => $specifications)
                                        <div class="col-sm-4"><li><b>{{$key}}</b>{{': '.$specifications}}</li></div>
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
    </div>
    <script type="text/javascript" src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/js/jquery.flexslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/js/cloud-zoom.js')}}"></script>

@endsection
