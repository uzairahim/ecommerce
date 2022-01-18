@extends('layout.header')
@section('content')
    <div id="page">
        @component('layout.head')@endcomponent
        <div style="background-color: #f1f1f1;padding-bottom:140px;">
            @component('layout.navbar')@endcomponent
        </div>
        <section>
            <div class="brand-logo">
                <div class="container">
                    <div class="new_title center">
                        <h1 class="text-uppercase">MUSIC HORN COMPOSITION</h1>
                        <div class="starSeparator"></div>
                    </div>
                    <div class="slider-items-products">
                        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                            <blockquote class="blockquote">
                                <i><b>“There is no success if you don’t change”</b> World is changing, so are we. We are changing
                                Air Horn
                                    from <b>Traditional</b> to <b>Musical</b>.</i><br> For those looking for a horn sound that’s unlike anything
                                you’ve heard
                                around, you have arrived at right place, we are pioneer in musical air horn for all kind
                                of vehicles
                                with Air Compressor on board
                                We compose the tunes for Air Horns.<br> In other words we customise the Air Horns, our
                                recent success
                                cases are BabyShark, Coffin Dance, Dhoom, Bela Ciao and many more, we can compose new
                                tunes
                                that is famous in your country
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
    </div>
@endsection
