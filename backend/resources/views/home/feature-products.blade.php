<section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products container">
        <div class="new_title center">
            <h2>Superb Products</h2>
            <div class="starSeparator"></div>
        </div>
        <div id="featured-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid">
                @foreach($superb_products as $product)
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info" data-toggle="modal" data-target="#popupModal"><a
                                        href="javascript:void(0)" onclick="openModal({{$product}})"
                                        class="product-image" title="{{$product->title}}">
                                        <img alt="Retis lapen casen"
                                             src="{{url('rated_products').'/'.$product->image}}"> </a>
                                    <div class="actions">
                                        <div class="quick-view-btn"><a href="#" data-toggle="tooltip"
                                                                       data-placement="right" title=""
                                                                       data-original-title="Quick View">
                                                <span>Quick View</span></a>
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
                                            <button class="button btn-cart" type="button"
                                                    data-toggle="tooltip"
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
                                            <div class="price-box"><span class="regular-price"> <span
                                                        class="price">$125.00</span> </span>
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
