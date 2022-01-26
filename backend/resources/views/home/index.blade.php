@extends('layout.header')
@section('content')

    <div id="page">
    @component('layout.head')@endcomponent
    @component('layout.navbar')@endcomponent

    <!-- Slider -->
    @component('home.carousel')@endcomponent
    <!-- End Slider -->

        <!-- About Us -->
    @component('home.about-us')@endcomponent
    <!-- End About Us -->

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
        <br>
        <!-- Featured Slider -->
{{--    @component('home.feature-products',['superb_products'=>$data['superb_products']])@endcomponent--}}
    <!-- End Featured Slider -->

        <!-- Best Seller -->
{{--    @component('home.best-seller',['best_seller'=>$data['best_seller']])@endcomponent--}}
    <!-- End Best Seller -->

        <!-- Modal -->
{{--        <div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="popupModalTitle"--}}
{{--             aria-hidden="true" style="background-color: #00000073;">--}}
{{--            <div class="modal-dialog modal-lg" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"--}}
{{--                                style="float: right;color: red">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                        <h4 class="modal-title" style="font-weight: bold;" id="selected_title"></h4>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body text-left">--}}
{{--                        <p class="ml-2 mr-2">Base is made of high quality Zinc, Trumpet is made of brass, high--}}
{{--                            quality--}}
{{--                            chrome, loud sound, TH-18 is--}}
{{--                            the best quality product available around the world in this category and specifications,<br>--}}
{{--                        </p>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-8">--}}
{{--                                <i><b>Technical specifications</b></i>--}}
{{--                                <p><b>Horn type</b> / TH-18</p>--}}
{{--                                <p><b>Length overall</b> 375mm 445mm</p>--}}
{{--                                <p><b>Funnel diameter</b> 110mm 110mm</p>--}}
{{--                                <p><b>Frequency</b> 280Hz 255Hz</p>--}}
{{--                                <p><b>Volume</b> 120dB (A) 120dB (A)</p>--}}
{{--                                <p><b>Weight</b> 0.90kg 1.10kg</p>--}}
{{--                                <p><b>Distance between fastening points</b> 240mm 310mm</p>--}}
{{--                                <p><b>scope of delivery</b></p>--}}
{{--                                <p><b>Compressed air horn</b> JUS40 (ready for assembly)</p>--}}
{{--                                <p><b>Funnel support</b></p>--}}
{{--                                <p><b>Fastening material</b></p>--}}
{{--                                <p>6mm compressed air connection 90 °</p>--}}
{{--                                <p>A complete double horn set, including valve connection set and protective funnel--}}
{{--                                    cap,--}}
{{--                                    is also available--}}
{{--                                    Homologation.Since these are commercial vehicle horns that are designed for--}}
{{--                                    installation on the roof (higher than--}}
{{--                                    2m), there are no regulations with regard to installation. Because of the--}}
{{--                                    loudness--}}
{{--                                    (higher than 110dB)--}}
{{--                                    the horn can only be used outside built-up areas. The factory-installed horn (or--}}
{{--                                    a--}}
{{--                                    replacement with ENo.) Must remain operational (via switch in the--}}
{{--                                    dashboard).</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <i><b>Basic Details</b></i>--}}
{{--                                <p><b>Product name:</b> 24.5″ eTone Chrome Air Horn</p>--}}
{{--                                <p><b>Part Number:</b> H09324AC</p>--}}
{{--                                <p><b>Finish:</b> Chrome</p>--}}
{{--                                <p><b>Size:</b> 24.5″</p>--}}
{{--                                <p><b>Horn Type:</b> eTone</p>--}}
{{--                                <p><b>Shield Part Number:</b> H00929B</p>--}}
{{--                                <p><b>Shield:</b> Not Included</p>--}}
{{--                                <p><b>Horn Mount Support:</b> Included</p>--}}
{{--                                <p><b>Product Description:</b></p>--}}
{{--                                <ul>--}}
{{--                                    <li>Chrome horn</li>--}}
{{--                                    <li>Horn support</li>--}}
{{--                                    <li>1/8” NPT port standard. Call for the size you need.</li>--}}
{{--                                    <li>Grover interchangeability. Call for horn supports</li>--}}
{{--                                </ul>--}}
{{--                                <br>--}}
{{--                                **Emergency Vehicle Use Only<br>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- /Modal -->

        <!--   Weekly Sale    -->
    @component('home.sections.safety_horn')@endcomponent
    @component('home.sections.road_master')@endcomponent
    @component('home.sections.section_3')@endcomponent
    @component('home.sections.section_4')@endcomponent
        <!--  /Weekly Sale    -->

        <!-- TESTIMONIALS -->
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
                                Great horn with simple setup to stock wiring of my vehicle. it is as loud as
                                expected.
                                its
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
                                Super Air Horn electric air horns does what it says. Loud, Musical type sound.
                                Hooking
                                it
                                up? Wasn't that easy. i ordered 1000 pieces, delivered on time, amazing service,
                                very
                                good
                                quality</em>
                            <div class="text-center">
                                <span class="h4 text-uppercase"
                                      style="color:#ffbc00"><b>Arisfian Mega Perdana</b></span>
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

                                MH-6800 This horn is great, it sounds great. Love the attention it demands when
                                someone
                                is
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
        <!-- /TESTIMONIALS -->
        <br>
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
                            <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo3')}}.png"
                                                               alt="Image"></a>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo2')}}.png"
                                                               alt="Image"></a>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo1')}}.png"
                                                               alt="Image"></a>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo4')}}.png"
                                                               alt="Image"></a>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo5')}}.png"
                                                               alt="Image"></a>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo6')}}.png"
                                                               alt="Image"></a>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo1')}}.png"
                                                               alt="Image"></a>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="{{asset('assets/images/b-logo4')}}.png"
                                                               alt="Image"></a>
                            </div>
                            <!-- End Item -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                    <li><a href="../grid.html">Grid</a></li>
                    <li><a href="../list.html">List</a></li>
                    <li><a href="../product_detail.html">Product Detail</a></li>
                    <li><a href="../shopping_cart.html">Shopping Cart</a></li>
                    <li><a href="../checkout.html">Checkout</a>
                        <ul>
                            <li><a href="../checkout_method.html">Checkout Method</a></li>
                            <li><a href="../checkout_billing_info.html">Checkout Billing Info</a></li>
                        </ul>
                    </li>
                    <li><a href="../wishlist.html">Wishlist</a></li>
                    <li><a href="../dashboard.html">Dashboard</a></li>
                    <li><a href="../multiple_addresses.html">Multiple Addresses</a></li>
                    <li><a href="../about_us.html">About us</a></li>
                    <li><a href="../blog.html">Blog</a>
                        <ul>
                            <li><a href="blog-detail.html">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li><a href="../contact_us.html">Contact us</a></li>
                    <li><a href="../404error.html">404 Error Page</a></li>
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
@endsection
