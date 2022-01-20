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
                                                <li class="item-nav tab-loaded tab-nav-actived"
                                                    data-type="order"
                                                    data-catid="" data-orderby="new_arrivals"
                                                    data-href="pdt_new_arrivals"><span
                                                        class="title-navi"
                                                        style="color: white">Best Seller</span></li>
                                            </ul>
                                        </div>
                                        <!-- End Tab Nav -->
                                        <!--Begin Tab Content -->
                                        <div class="thm-pdt-content wide-5">
                                            <div
                                                class="pdt-content pdt_new_arrivals is-loaded  tab-content-actived">
                                                <ul class="pdt-list products-grid"
                                                    style="justify-content: center;display: flex;">
                                                    @php
                                                        $counter = 0.5;
                                                    @endphp
                                                    @foreach($best_seller as $product)
                                                        @php
                                                            $counter+=0.5;
                                                        @endphp
                                                        <li class="item item-animate wide-products wow fadeInUp"
                                                            data-wow-duration="1s"
                                                            data-wow-delay="{{$counter.'s'}}">
                                                            <div class="item-inner">
                                                                <div class="item-img" data-toggle="modal"
                                                                     data-target="#popupModal">
                                                                    <div class="item-img-info"><a
                                                                            href="javascript:void(0)"
                                                                            onclick="openModal({{$product}})"
                                                                            title="{{$product->title}}"
                                                                            class="product-image"><img
                                                                                src="{{url('rated_products').'/'.$product->image}}"
                                                                                alt="Retis lapen casen"></a>
                                                                        <div class="actions">
                                                                            <div class="quick-view-btn"><a
                                                                                    href=""
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="right"
                                                                                    title=""
                                                                                    data-original-title="Quick View">
                                                                                    <span>Quick View</span></a>
                                                                            </div>
                                                                            <div class="link-wishlist"><a
                                                                                    href="#"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="right"
                                                                                    title=""
                                                                                    data-original-title="Wishlist"><span>Add to Wishlist</span></a>
                                                                            </div>
                                                                            <div class="link-compare"><a
                                                                                    href=""
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="right"
                                                                                    title=""
                                                                                    data-original-title="Compare"><span>Add to Compare</span></a>
                                                                            </div>
                                                                            <div class="add_cart">
                                                                                <button
                                                                                    class="button btn-cart"
                                                                                    type="button"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="right"
                                                                                    title=""
                                                                                    data-original-title="Add to Cart">
                                                                                    <span>Add to Cart</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <div class="ratings">
                                                                                <div class="rating-box">
                                                                                    <div class="rating"
                                                                                         style="width:80%"></div>
                                                                                </div>
                                                                                <p class="rating-links"><a
                                                                                        href="#">1
                                                                                        Review(s)</a> <span
                                                                                        class="separator">|</span>
                                                                                    <a
                                                                                        href="#">Add
                                                                                        Review</a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title"><a href="#"
                                                                                                   title="{{$product->title}}">
                                                                                {{$product->title}}</a>
                                                                        </div>
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
