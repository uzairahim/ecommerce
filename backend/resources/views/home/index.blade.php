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
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="overlay-text overlay-text-img-1">
                            <h1 style="color: black;font-weight: bold;">Baby shark</h1>
                            <h3 style="color: black;font-weight: bold;margin-top: 0px">20 sounds</h3>
                        </div>
                        <img alt="promotion banner" src="{{asset('assets/images/road_master.jpeg')}}">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="overlay-text overlay-text-img-2">
                            <h1 style="color: white;font-weight: bold;">Whistle Horn</h1>
                            <h3 style="color: white;font-weight: bold;margin-top: 0px">3 sounds</h3>
                        </div>
                        <img alt="promotion banner" src="{{asset('assets/images/whistle_horn.png')}}">
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
        @component('home.our-brands')@endcomponent
    </div>
@endsection
