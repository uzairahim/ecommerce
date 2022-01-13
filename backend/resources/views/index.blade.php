<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons Icon -->
    <link rel="icon" href="{{asset('assets/images/logo.png')}}" type="image/gif" sizes="16x16">
    <title>Super Air Horns</title>

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/font-awesome.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/simple-line-icons.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/jquery.mobile-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/revslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}" media="all">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index index">
<div id="page">
    <!-- Header -->
    <header>
        <div class="header-container">
            <div class="header-top">
                <div class="container text-center">
                    <div class="welcome-msg hidden-xs">Welcome to SuperAirHorns Website - Established 1972</div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <!-- Navbar -->
    <nav>
        <div class="container">
            <!-- Header Logo -->
            <div class="logo"><a title="MSK" href="index.blade.php"><img alt="MSK"
                                                                         src="{{asset('assets/images/logo.png')}}" class="img-fluid"></a>
            </div>
            <!-- End Header Logo -->

            <div class="mm-toggle-wrap">
                <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span></div>
            </div>

            <ul class="nav hidden-xs menu-item menu-item-left">
                <li class="level0 parent drop-menu active"><a href="{{url('/')}}"><span>Home</span></a></li>
            </ul>
            <ul class="nav hidden-xs menu-item menu-item-right">
                <li class="mega-menu"><a class="level-top" href="#about-us"><span>About Us</span></a></li>
            </ul>


        </div>
    </nav>

    <!-- Slider -->
    <div id="thm-slideshow" class="thm-slideshow" style="height: 100vh">
        <div class="container">
            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                 data-alias="classicslider1"
                 style="margin:0px auto;background-color:transparent;padding:0px;height: 100vh;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none; height: 100vh;" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-16" data-transition="zoomout" data-slotamount="default"
                            data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"
                            data-rotate="0"
                            data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                            data-saveperformance="off" data-title="Intro" data-description="">
                            <!-- MAIN IMAGE -->
                            <img style="background-size: 100% 100vh; background-position: 100% 0;" class="banner-imageee" src="{{asset('assets/images/banner-1.jpeg')}}" alt="">
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"
                            data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"
                            data-thumb="{{asset('assets/images/banner-2.png')}}" data-rotate="0"
                            data-saveperformance="off" data-title="Ken Burns" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('assets/images/banner-2.png')}}" alt="">
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-19" data-transition="zoomout" data-slotamount="default"
                            data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"
                            data-thumb="{{asset('assets/images/banner-3.png')}}" data-rotate="0"
                            data-saveperformance="off" data-title="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('assets/images/banner-3.png')}}" alt="">
                        </li>
                        <!-- SLIDE  -->
                    </ul>
                    <div class="tp-static-layers"></div>
                    <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- end Slider -->
    <section id="about-us">
        <div class="brand-logo">
            <div class="container">
                <div class="new_title center">
                    <h1 class="text-uppercase">About Us</h1>
                    <div class="starSeparator"></div>
                </div>
                <div class="slider-items-products">
                    <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                        <blockquote class="blockquote">
                            <h4><b>MSK-SwuperHorn</b></h4>
                            Super Horn House established back in 1972 offers a premium line of automotive air horns, for
                            virtually every conceivable application. Whether you are looking for a loud Train horn,
                            Truck Horn,
                            Marine Horn, SUV, Car or even for your bike, you have arrived at the right place.
                            <br>
                            At Super Horn House we understand the core of Air Horn Business, but we also bring something
                            more to the table. IDEAS !! fresh way of solving problems that can help our client business.
                            If your
                            business has special needs or if you are simply searching for a better way you are welcome
                            to speak
                            with our manufacturing unit...<br> we have ideas to share. The science of auto horns, Air Horns,
                            electric
                            horns and even individual parts.
                            Super Horn House aims to maximise its success by finding and processing of better resources
                            – areas
                            of expertise in which we have a clear competitive advantage
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="promo-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><img alt="promotion banner"
                                                                       src="{{asset('assets/images/feature-product-1.png')}}">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><img alt="promotion banner"
                                                                       src="{{asset('assets/images/feature-product-2.png')}}">
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Slider -->
    <section class="featured-pro container wow bounceInUp animated">
        <div class="slider-items-products container">
            <div class="new_title center">
                <h2>Superb Products</h2>
                <div class="starSeparator"></div>
            </div>
            <div id="featured-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                    @foreach($data['superb_products'] as $product)
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info" data-toggle="modal" data-target="#popupModal"><a href="javascript:void(0)" onclick="openModal({{$product}})" class="product-image" title="{{$product->title}}">
                                            <img alt="Retis lapen casen" src="{{url('rated_products').'/'.$product->image}}"> </a>
                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="#" data-toggle="tooltip"
                                                                           data-placement="right" title=""
                                                                           data-original-title="Quick View"> <span>Quick View</span></a>
                                            </div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip"
                                                                          data-placement="right" title=""
                                                                          data-original-title="Wishlist"><span>Add to Wishlist</span></a>
                                            </div>
                                            <div class="link-compare"><a href="#" data-toggle="tooltip"
                                                                         data-placement="right" title=""
                                                                         data-original-title="Compare"><span>Add to Compare</span></a>
                                            </div>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button" data-toggle="tooltip"
                                                        data-placement="right" title=""
                                                        data-original-title="Add to Cart">
                                                    <span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:80%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                        class="separator">|</span>
                                                    <a href="#">Add Review</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a title="{{$product->title}}"
                                                                   href="#">{{$product->title}}</a></div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"> <span class="price">$125.00</span> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Slider -->

    <section style="background-color: #848484;">
        <div class="container pb-5">
            <div class="row">
                <div class="products-grid">
                    <div class="col-md-12">
                        <div class="std">
                            <div class="home-tabs">
                                <div class="producttabs">
                                    <div id="thm_producttabs1" class="thm-producttabs">
                                        <!--<h3></h3>-->
                                        <div class="thm-pdt-container">
                                            <!--Begin Tab Nav -->
                                            <div class="thm-pdt-nav">
                                                <ul class="pdt-nav">
                                                    <li class="item-nav tab-loaded tab-nav-actived" data-type="order"
                                                        data-catid="" data-orderby="new_arrivals"
                                                        data-href="pdt_new_arrivals"><span
                                                            class="title-navi" style="color: white">Best Seller</span></li>
                                                </ul>
                                            </div>
                                            <!-- End Tab Nav -->
                                            <!--Begin Tab Content -->
                                            <div class="thm-pdt-content wide-5">
                                                <div class="pdt-content pdt_new_arrivals is-loaded  tab-content-actived">
                                                    <ul class="pdt-list products-grid" style="justify-content: center;display: flex;">
                                                        @php
                                                            $counter = 0.5;
                                                        @endphp
                                                        @foreach($data['best_seller'] as $product)
                                                            @php
                                                                $counter+=0.5;
                                                            @endphp
                                                            <li class="item item-animate wide-products wow fadeInUp"
                                                                data-wow-duration="1s" data-wow-delay="{{$counter.'s'}}">
                                                                <div class="item-inner">
                                                                    <div class="item-img" data-toggle="modal" data-target="#popupModal">
                                                                        <div class="item-img-info"><a href="javascript:void(0)" onclick="openModal({{$product}})"
                                                                                                      title="{{$product->title}}"
                                                                                                      class="product-image"><img
                                                                                    src="{{url('rated_products').'/'.$product->image}}"
                                                                                    alt="Retis lapen casen"></a>
                                                                            <div class="actions">
                                                                                <div class="quick-view-btn"><a href=""
                                                                                                               data-toggle="tooltip"
                                                                                                               data-placement="right"
                                                                                                               title=""
                                                                                                               data-original-title="Quick View">
                                                                                        <span>Quick View</span></a></div>
                                                                                <div class="link-wishlist"><a href="#"
                                                                                                              data-toggle="tooltip"
                                                                                                              data-placement="right"
                                                                                                              title=""
                                                                                                              data-original-title="Wishlist"><span>Add to Wishlist</span></a>
                                                                                </div>
                                                                                <div class="link-compare"><a href=""
                                                                                                             data-toggle="tooltip"
                                                                                                             data-placement="right"
                                                                                                             title=""
                                                                                                             data-original-title="Compare"><span>Add to Compare</span></a>
                                                                                </div>
                                                                                <div class="add_cart">
                                                                                    <button class="button btn-cart"
                                                                                            type="button"
                                                                                            data-toggle="tooltip"
                                                                                            data-placement="right" title=""
                                                                                            data-original-title="Add to Cart">
                                                                                        <span>Add to Cart</span></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="ratings">
                                                                                    <div class="rating-box">
                                                                                        <div class="rating"
                                                                                             style="width:80%"></div>
                                                                                    </div>
                                                                                    <p class="rating-links"><a href="#">1
                                                                                            Review(s)</a> <span
                                                                                            class="separator">|</span> <a
                                                                                            href="#">Add Review</a></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-info">
                                                                        <div class="info-inner">
                                                                            <div class="item-title"><a href="#"
                                                                                                       title="{{$product->title}}">
                                                                                    {{$product->title}}</a></div>
                                                                            <div class="item-content">
                                                                                <div class="item-price">
                                                                                    <div class="price-box"><span
                                                                                            class="regular-price"><span
                                                                                                class="price">$160.00</span> </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="popupModalTitle" aria-hidden="true" style="background-color: #00000073;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: right;color: red">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" style="font-weight: bold;" id="selected_title"></h4>
                </div>
                <div class="modal-body text-left">
                    <p class="ml-2 mr-2">Base is made of high quality Zinc, Trumpet is made of brass, high quality chrome, loud sound, TH-18 is
                        the best quality product available around the world in this category and specifications,<br>
                    </p>
                    <div class="row">
                        <div class="col-md-8">
                            <i><b>Technical specifications</b></i>
                            <p><b>Horn type</b> / TH-18</p>
                            <p><b>Length overall</b> 375mm 445mm</p>
                            <p><b>Funnel diameter</b> 110mm 110mm</p>
                            <p><b>Frequency</b> 280Hz 255Hz</p>
                            <p><b>Volume</b> 120dB (A) 120dB (A)</p>
                            <p><b>Weight</b> 0.90kg 1.10kg</p>
                            <p><b>Distance between fastening points</b> 240mm 310mm</p>
                            <p><b>scope of delivery</b></p>
                            <p><b>Compressed air horn</b> JUS40 (ready for assembly)</p>
                            <p><b>Funnel support</b></p>
                            <p><b>Fastening material</b></p>
                            <p>6mm compressed air connection 90 °</p>
                            <p>A complete double horn set, including valve connection set and protective funnel cap, is also available
                                Homologation.Since these are commercial vehicle horns that are designed for installation on the roof (higher than
                                2m), there are no regulations with regard to installation. Because of the loudness (higher than 110dB)
                                the horn can only be used outside built-up areas. The factory-installed horn (or a replacement with ENo.) Must remain operational (via switch in the dashboard).</p>
                        </div>
                        <div class="col-md-4">
                            <i><b>Basic Details</b></i>
                            <p><b>Product name:</b> 24.5″ eTone Chrome Air Horn</p>
                            <p><b>Part Number:</b> H09324AC</p>
                            <p><b>Finish:</b> Chrome</p>
                            <p><b>Size:</b> 24.5″</p>
                            <p><b>Horn Type:</b> eTone</p>
                            <p><b>Shield Part Number:</b> H00929B</p>
                            <p><b>Shield:</b> Not Included</p>
                            <p><b>Horn Mount Support:</b> Included</p>
                            <p><b>Product Description:</b></p>
                            <ul>
                                <li>Chrome horn</li>
                                <li>Horn support</li>
                                <li>1/8” NPT port standard. Call for the size you need.</li>
                                <li>Grover interchangeability. Call for horn supports</li>
                            </ul>
                            <br>
                            **Emergency Vehicle Use Only<br>
                        </div>
                        {{--                                                                <div class="col-md-4">--}}
                        {{--                                                                    <img src="" alt="" style="height: 100%;width: 100%;" id="selected_image">--}}
                        {{--                                                                    <span></span>--}}
                        {{--                                                                </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Latest Blog -->
    <section class="latest-blog">
        <div class="container">
            <div class="new_title center">
                <h1 class="text-uppercase">testimonials</h1>
                <div class="starSeparator"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".5s">
                    <div class="text-center"><img src="{{asset('assets/images/buyer1.jpg')}}" alt=""
                                                  style="height:100px;width:100px;border: 5px solid #b69139;border-radius: 50%;">
                    </div>
                    <div class="">
                        <em>Super Air Horns
                            Great horn with simple setup to stock wiring of my vehicle. it is as loud as expected. its
                            150db +
                            &nbsp;</em>
                        <br>
                        <div class="text-center">
                            <span class="h4 text-uppercase text-center"
                                  style="color:#ffbc00"><b>Renat William Denkha</b></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay="1s">
                    <div class="text-center"><img src="{{asset('assets/images/buyer2.jpg')}}" alt=""
                                                  style="height:100px;width:100px;border: 5px solid #b69139;border-radius: 50%;">
                    </div>
                    <div><em>Super Air Horns
                            Super Air Horn electric air horns does what it says. Loud, Musical type sound. Hooking it
                            up? Wasn't that easy. i ordered 1000 pieces, delivered on time, amazing service, very good
                            quality</em>
                        <div class="text-center">
                            <span class="h4 text-uppercase" style="color:#ffbc00"><b>Arisfian Mega Perdana</b></span>
                            <br><span class="text-secondary">Indonesia</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay="1.5s">
                    <div class="text-center"><img src="{{asset('assets/images/buyer3.jpg')}}" alt=""
                                                  style="height:100px;width:100px;border: 5px solid #b69139;border-radius: 50%;">
                    </div>
                    <div><em>Super Air Horns

                            MH-6800 This horn is great, it sounds great. Love the attention it demands when someone is
                            not paying attention and drifts into my lane. I did not receive a discount on this
                            purchase</em>
                        <br>
                        <div class="text-center">
                            <span class="h4 text-uppercase text-center"
                                  style="color:#ffbc00"><b>Nabil William</b></span><br>
                            <span class="text-secondary">Egypt</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End Latest Blog -->

    <div class="brand-logo">
        <div class="container">
            <div class="new_title center">
                <h1 class="text-uppercase">Our Partners</h1>
                <div class="starSeparator"></div>
            </div>
            <div class="slider-items-products">
                <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col6">

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo3')}}.png" alt="Image"></a>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo2')}}.png" alt="Image"></a>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo1')}}.png" alt="Image"></a>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo4')}}.png" alt="Image"></a>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo5')}}.png" alt="Image"></a>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo6')}}.png" alt="Image"></a>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo1')}}.png" alt="Image"></a>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo4')}}.png" alt="Image"></a>
                        </div>
                        <!-- End Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-features-box">
        <div class="container">
            <ul>
                <li>
                    <div class="feature-box red_bg"><span class="icon-globe-alt"></span>
                        <div class="content">
                            <h3>FREE SHIPPING WORLDWIDE</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="feature-box yellow_bg"><span class="icon-support"></span>
                        <div class="content">
                            <h3>24/7 CUSTOMER SUPPORT</h3>
                        </div>
                    </div>
                </li>
                <li class="last">
                    <div class="feature-box brown_bg"><span class="icon-share-alt"></span>
                        <div class="content">
                            <h3>RETURNS AND EXCHANGES</h3>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-lg-8">
                        <div class="footer-column pull-left">
                            <h4>CUSTOMMER SERVICE</h4>
                            <ul class="links">
                                <li class="first"><a href="#" title="Contact us">My Account</a></li>
                                <li><a href="#" title="About us">Order History</a></li>
                                <li><a href="#" title="faq">FAQ</a></li>
                                <li><a href="#" title="Popular Searches">Specials</a></li>
                                <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>

                            </ul>
                        </div>
                        <div class="footer-column pull-left">
                            <h4>Corporation</h4>
                            <ul class="links">
                                <li class="first"><a title="Your Account" href="#">About us</a></li>
                                <li><a title="Information" href="#">Customer Service</a></li>
                                <li><a title="Addresses" href="#">Company</a></li>
                                <li><a title="Addresses" href="#">Investor Relations</a></li>
                                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>

                            </ul>
                        </div>
                        <div class="footer-column pull-left">
                            <h4>Why choose Us</h4>
                            <ul class="links">
                                <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                                <li><a href="#" title="Blog">Blog</a></li>
                                <li><a href="#" title="Company">Company</a></li>
                                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <div class="footer-column-last">
                            <div class="newsletter-wrap">
                                <h4>Sign up for emails</h4>
                                <form id="newsletter-validate-detail" method="post" action="javascript:void(0)">
                                    <div id="container_form_news">
                                        <div id="container_form_news2">
                                            <input type="text" class="input-text required-entry validate-email"
                                                   value="Enter your email address" onFocus=" this.value='' "
                                                   title="Sign up for our newsletter" id="newsletter" name="email">
                                            <button class="button subscribe" title="Subscribe"><span>Subscribe</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <br>
                            <div class="social">
                                <h4>Follow Us</h4>
                                <ul class="link">
                                    <li class="fb pull-left"><a href="#"></a></li>
                                    <li class="tw pull-left"><a href="#"></a></li>
                                    <li class="googleplus pull-left"><a href="#"></a></li>
                                    <li class="rss pull-left"><a href="#"></a></li>
                                    <li class="pintrest pull-left"><a href="#"></a></li>
                                    <li class="linkedin pull-left"><a href="#"></a></li>
                                    <li class="youtube pull-left"><a href="#"></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-sm-12 col-xs-12 footer-logo"><img alt="Datson"
                                                                  src="{{asset('assets/images/logo.png')}}"></div>
                <address>
                    <i class="fa fa-map-marker"></i>Office # 2, 1st Floor 37 Civic Center M Block Model Town, Lahore,
                    Pakistan <i class="fa fa-mobile"></i><span> +92 314 4102534</span> <i class="fa fa-envelope"></i><a
                        href="mailto:superairhorns@gmail.com"> superairhorns@gmail.com</a>
                </address>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 coppyright">&copy; 2016 ThemesGround. All Rights Reserved.</div>

                </div>
            </div>
        </div>
    </footer>
</div>
<div id="mobile-menu">
    <ul>
        <li>
            <div class="mm-search">
                <form id="search_mob" name="search">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                        <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term"
                               id="srch-term">
                    </div>
                </form>
            </div>
        </li>
        <li>
            <div class="home"><a href="#"><i class="icon-home"></i>Home</a></div>
        </li>
        <li><a href="#">Pages</a>
            <ul>
                <li><a href="grid.html">Grid</a></li>
                <li><a href="list.html">List</a></li>
                <li><a href="product_detail.html">Product Detail</a></li>
                <li><a href="shopping_cart.html">Shopping Cart</a></li>
                <li><a href="checkout.html">Checkout</a>
                    <ul>
                        <li><a href="checkout_method.html">Checkout Method</a></li>
                        <li><a href="checkout_billing_info.html">Checkout Billing Info</a></li>
                    </ul>
                </li>
                <li><a href="wishlist.html">Wishlist</a></li>
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="multiple_addresses.html">Multiple Addresses</a></li>
                <li><a href="about_us.html">About us</a></li>
                <li><a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="blog-detail.html">Blog Detail</a></li>
                    </ul>
                </li>
                <li><a href="contact_us.html">Contact us</a></li>
                <li><a href="404error.html">404 Error Page</a></li>
            </ul>
        </li>
        <li><a href="#">Women</a>
            <ul>
                <li><a href="#" class="">Stylish Bag</a>
                    <ul>
                        <li><a href="#" class="">Clutch Handbags</a></li>
                        <li><a href="#l" class="">Diaper Bags</a></li>
                        <li><a href="#" class="">Bags</a></li>
                        <li><a href="#" class="">Hobo handbags</a></li>
                    </ul>
                </li>
                <li><a href="#">Material Bag</a>
                    <ul>
                        <li><a href="#">Beaded Handbags</a></li>
                        <li><a href="#">Fabric Handbags</a></li>
                        <li><a href="#">Handbags</a></li>
                        <li><a href="#">Leather Handbags</a></li>
                    </ul>
                </li>
                <li><a href="#">Shoes</a>
                    <ul>
                        <li><a href="#">Flat Shoes</a></li>
                        <li><a href="#">Flat Sandals</a></li>
                        <li><a href="#">Boots</a></li>
                        <li><a href="#">Heels</a></li>
                    </ul>
                </li>
                <li><a href="#">Jwellery</a>
                    <ul>
                        <li><a href="#">Bracelets</a></li>
                        <li><a href="#">Necklaces &amp; Pendent</a></li>
                        <li><a href="#l">Pendants</a></li>
                        <li><a href="#">Pins &amp; Brooches</a></li>
                    </ul>
                </li>
                <li><a href="#">Dresses</a>
                    <ul>
                        <li><a href="#">Casual Dresses</a></li>
                        <li><a href="#">Evening</a></li>
                        <li><a href="#">Designer</a></li>
                        <li><a href="#">Party</a></li>
                    </ul>
                </li>
                <li><a href="#">Swimwear</a>
                    <ul>
                        <li><a href="#">Swimsuits</a></li>
                        <li><a href="#">Beach Clothing</a></li>
                        <li><a href="#">Clothing</a></li>
                        <li><a href="#">Bikinis</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">Men</a>
            <ul>
                <li><a href="#" class="">Shoes</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="#">Sport Shoes</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Casual Shoes</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Leather Shoes</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">canvas shoes</a></li>
                    </ul>
                </li>
                <li><a href="#">Dresses</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="#">Casual Dresses</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Evening</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Designer</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Party</a></li>
                    </ul>
                </li>
                <li><a href="#">Jackets</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="#">Coats</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Formal Jackets</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Leather Jackets</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Blazers</a></li>
                    </ul>
                </li>
                <li><a href="#">Watches</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Casio</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Titan</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Tommy-Hilfiger</a></li>
                    </ul>
                </li>
                <li><a href="#">Sunglasses</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="#">Ray Ban</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Police</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Oakley</a></li>
                    </ul>
                </li>
                <li><a href="#">Accesories</a>
                    <ul class="level1">
                        <li class="level2 nav-6-1-1"><a href="#">Backpacks</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Wallets</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Laptops Bags</a></li>
                        <li class="level2 nav-6-1-1"><a href="#">Belts</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">Electronics</a>
            <ul>
                <li><a href="#"><span>Mobiles</span></a>
                    <ul>
                        <li><a href="#"><span>Samsung</span></a></li>
                        <li><a href="#"><span>Nokia</span></a></li>
                        <li><a href="#"><span>IPhone</span></a></li>
                        <li><a href="#"><span>Sony</span></a></li>
                    </ul>
                </li>
                <li><a href="#" class=""><span>Accesories</span></a>
                    <ul>
                        <li><a href="#"><span>Mobile Memory Cards</span></a></li>
                        <li><a href="#"><span>Cases &amp; Covers</span></a></li>
                        <li><a href="#"><span>Mobile Headphones</span></a></li>
                        <li><a href="#"><span>Bluetooth Headsets</span></a></li>
                    </ul>
                </li>
                <li><a href="#"><span>Cameras</span></a>
                    <ul>
                        <li><a href="#"><span>Camcorders</span></a></li>
                        <li><a href="#"><span>Point &amp; Shoot</span></a></li>
                        <li><a href="#"><span>Digital SLR</span></a></li>
                        <li><a href="#"><span>Camera Accesories</span></a></li>
                    </ul>
                </li>
                <li><a href="#"><span>Audio &amp; Video</span></a>
                    <ul>
                        <li><a href="#"><span>MP3 Players</span></a></li>
                        <li><a href="#"><span>IPods</span></a></li>
                        <li><a href="#"><span>Speakers</span></a></li>
                        <li><a href="#"><span>Video Players</span></a></li>
                    </ul>
                </li>
                <li><a href="#"><span>Computer</span></a>
                    <ul>
                        <li><a href="#"><span>External Hard Disk</span></a></li>
                        <li><a href="#"><span>Pendrives</span></a></li>
                        <li><a href="#"><span>Headphones</span></a></li>
                        <li><a href="#"><span>PC Components</span></a></li>
                    </ul>
                </li>
                <li><a href="#"><span>Appliances</span></a>
                    <ul>
                        <li><a href="#"><span>Vaccum Cleaners</span></a></li>
                        <li><a href="#"><span>Indoor Lighting</span></a></li>
                        <li><a href="#"><span>Kitchen Tools</span></a></li>
                        <li><a href="#"><span>Water Purifier</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">Furniture</a></li>
        <li><a href="#">Kids</a></li>
        <li><a href="contact-us.html">Contact Us</a></li>
    </ul>
    <div class="dropdown block-language-wrapper">
        <ul>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img
                        src="{{asset('assets/images/english.png')}}" alt="language"> English </a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img
                        src="{{asset('assets/images/francais.png')}}" alt="language"> French </a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img
                        src="{{asset('assets/images/german.png')}}" alt="language"> German </a></li>
        </ul>
    </div>
    <div class="dropdown block-currency-wrapper">
        <ul>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
        </ul>
    </div>
</div>

<!-- End Footer -->

<!-- JavaScript -->
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/common.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/countdown.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.mobile-menu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/revolution-slider.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/revolution.extension.js')}}"></script>
<script type="text/javascript">
    var dthen1 = new Date("12/25/17 11:59:00 PM");
    start = "05/03/15 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow1 = new Date(start_date);
    if (CountStepper > 0)
        ddiff = new Date((dnow1) - (dthen1));
    else
        ddiff = new Date((dthen1) - (dnow1));
    gsecs1 = Math.floor(ddiff.valueOf() / 1000);

    var iid1 = "countbox_1";
    CountBack_slider(gsecs1, "countbox_1", 1);

    var dthen1 = new Date("12/12/17 11:59:00 PM");
    start = "01/20/16 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow1 = new Date(start_date);
    if (CountStepper > 0)
        ddiff = new Date((dnow1) - (dthen1));
    else
        ddiff = new Date((dthen1) - (dnow1));
    gsecs1 = Math.floor(ddiff.valueOf() / 1000);

    var iid1 = "countbox_2";
    CountBack_slider(gsecs1, "countbox_2", 1);

    function openModal(product){
        $('.modal').on('shown.bs.modal', function (e) {
            $("html").addClass("modal-open");
        });
        $('.modal').on('hide.bs.modal', function (e) {
            $("html").removeClass("modal-open");
        });
        $('#selected_image').attr('src',window.location.href+'rated_products/'+product.image);
        $('#selected_title').text(product.title)
    }
</script>

<script type="text/javascript">
    var tpj = jQuery;
    var revapi4;
    tpj(document).ready(function () {
        if (tpj("#rev_slider_4_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_4_1");
        } else {
            revapi4 = tpj("#rev_slider_4_1").show().revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style: "zeus",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 750,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        }
                    }
                    ,
                    bullets: {
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        style: "metis",
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 5,
                        tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%"
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [768, 1024, 778, 480],
                gridheight: [890, 600, 500, 400],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });	/*ready*/
</script>
</body>
</html>

