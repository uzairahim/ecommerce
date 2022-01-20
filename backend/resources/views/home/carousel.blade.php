<style>
    .slideshow {
        position: relative;
        z-index: 1;
        height: 100%;
        width: 100%;
        margin: 0px auto;
        clip-path: polygon(0 0, 100% 0, 100% 90%, 46% 100%, 54% 100%, 0 90%);
    }
    .slideshow * {
        outline: none;
    }
    .slideshow .slider-track {
        -webkit-transition: all 1s cubic-bezier(0.7, 0, 0.3, 1);
        transition: all 1s cubic-bezier(0.7, 0, 0.3, 1);
    }
    .slideshow .item {
        height: 100%;
        position: relative;
        z-index: 1;
    }
    /*slick-slide slick-current slick-active*/
    .slideshow .item img {
        width: 100%;
        height: 550px;
        -webkit-transition: all 1s cubic-bezier(0.7, 0, 0.3, 1);
        transition: all 1s cubic-bezier(0.7, 0, 0.3, 1);
        /*-webkit-transform: scale(1.3);*/
        /*transform: scale(1.3);*/
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    /*.slideshow .slick-current .item img{*/
    /*    -webkit-animation: cssAnimation 15s forwards;*/
    /*    animation: cssAnimation 15s forwards;*/
    /*}*/
    @keyframes cssAnimation {
        from {
            -webkit-transform: scale(1.3) translate(0px);
        }
        to {
            -webkit-transform: scale(1) translate(0px);
        }
    }
    @-webkit-keyframes cssAnimation {
        from {
            -webkit-transform: scale(1.3) translate(0px);
        }
        to {
            -webkit-transform: scale(1) translate(0px);
        }
    }
</style>
<div class="slideshow">
    <div class="slider">
        <div class="item">
            <img src="{{asset('assets/images/banner-1.jpeg')}}"/>
        </div>
        <div class="item">
            <img src="{{asset('assets/images/banner-2.png')}}"/>
        </div>
        <div class="item">
            <img src="{{asset('assets/images/banner-3.png')}}"/>
        </div>
    </div>
</div>
