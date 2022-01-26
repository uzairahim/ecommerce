<style>
    .our_offer {
        background-color: #ecfdff;
    }
    .offer_text{
        margin-top: 15%;
    }
    .offer_text h1{
        font-size: 30px;
    }
    .offer_img{
        text-align: center;
    }
    .section_padding {
        padding: 100px 0;
    }
    .circles{
        height: 100px;
        width: 100px;
        background-color: white;
        border-radius: 50px;
        display: inline-block;
        margin: 5px;
    }
    .box-timer .circles {
        position: relative;
    }
    .box-timer span {
        font-style: italic;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<section class="our_offer section_padding" style="background-color: #b5942b;">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6">
                <div class="offer_img">
                    <img src="{{asset('assets/images/safety_horn.jpeg')}}" alt="" style="height: 400px;border-radius: 5px;">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 text-center">
                <div class="offer_text">
                    <h1 class="text-uppercase">safety horn (sf 110)</h1>
                    <h4 class="text-capitalize">best quality around the world - 2 year warrenty</h4>
                    <div class="box-timer">
                        <div class="circles"><span>12/24V</span></div>
                        <div class="circles"><span>ABS Mated</span></div>
                        <div class="circles"><span>Cooper Inside</span></div>
                        <div class="circles"><span>150+ DB</span></div>
                    </div>

{{--                    <div class="box-timer">--}}
{{--                        <div class="countbox_1 timer-grid"></div>--}}
{{--                    </div>--}}
                    <br>
                    <div class="input-group" style="padding-left: 43%;">
                        <a class="btn btn-success" href="{{url('/safety_horn')}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
