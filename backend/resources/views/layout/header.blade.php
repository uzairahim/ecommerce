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

@yield('content')

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



