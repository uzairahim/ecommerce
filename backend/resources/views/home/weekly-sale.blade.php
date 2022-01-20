<style>
    .our_offer {
        background-color: #ecfdff;
    }
    .offer_text h1{
        margin-left: 7%;
        font-size: 30px;
    }
    .section_padding {
        padding: 140px 0;
    }
    .input-group{
        display: flex;
        margin-left: 5%;
        width: 90%;
    }
    .input-group .form-control{
        border: none;
        height: 60px;
    }
</style>

<section class="our_offer section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6">
                <div class="offer_img">
                    <img src="{{asset('assets/images/feature-product-1.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="offer_text">
                    <h1>Weekly Sale on
                        60% Off All Products</h1>
                    <div class="box-timer">
                        <div class="countbox_1 timer-grid"></div>
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="enter email address"
                               aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <button class="btn btn-success" style="padding: 0px 25px 0px 25px;">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
