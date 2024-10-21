<div class="slider-area-wrap">
    



     
    <div class="home-slider-carousel owl-carousel">
        <div class="single-slide-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-text">
                            <h2>Canvas Gear</h2>
                            <h3>Rất nhiều mặt hàng chính hãng</h3>
                            <h4>Và phần quà đang chờ bạn</h4>
                            <a href="index.php?act=show_product" class="btn">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slide-item slide-item_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-text">
                            <h2>Ajaira Mobile</h2>
                            <h3>Rất nhiều mặt hàng chính hãng</h3>
                            <h4>Và phần quà đang chờ bạn</h4>
                            <a href="index.php?act=show_product" class="btn">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slide-item slide-item_3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-text">
                            <h2>HasMobile</h2>
                            <h3>Rất nhiều mặt hàng chính hãng</h3>
                            <h4>Và phần quà đang chờ bạn</h4>
                            <a href="index.php?act=show_product" class="btn">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Slider Area ==-->

<!--== Start Call To Action ==-->
<section id="call-to-action">
    <div class="container">
        <div class="call-to-action-content">
            <div class="row">
                <!-- Single Call to Action Start -->
                <div class="col-lg-3 col-sm-6 m-auto">
                    <div class="single-action-item d-flex align-items-center">
                        <div class="call-action-icon">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="call-action-info">
                            <h4>Miễn phí vận chuyển</h4>
                            <p>trên đơn hàng trên 10tr</p>
                        </div>
                    </div>
                </div>
                <!-- Single Call to Action End -->

                <!-- Single Call to Action Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-action-item d-flex align-items-center">
                        <div class="call-action-icon">
                            <i class="fa fa-support"></i>
                        </div>
                        <div class="call-action-info">
                            <h4>Hỗ trợ 24/7</h4>
                            <p>Tư vấn trực tuyến</p>
                        </div>
                    </div>
                </div>
                <!-- Single Call to Action End -->

                <!-- Single Call to Action Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-action-item d-flex align-items-center">
                        <div class="call-action-icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="call-action-info">
                            <h4>cập nhật hàng ngày</h4>
                            <p>Kiểm tra cửa hàng</p>
                        </div>
                    </div>
                </div>
                <!-- Single Call to Action End -->

                <!-- Single Call to Action Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-action-item d-flex align-items-center">
                        <div class="call-action-icon">
                            <i class="fa fa-refresh"></i>
                        </div>
                        <div class="call-action-info">
                            <h4>Đổi trả trong 30 ngày</h4>
                            <p>đảm bảo hoàn tiền</p>
                        </div>
                    </div>
                </div>
                <!-- Single Call to Action End -->
            </div>
        </div>
    </div>
</section>
<!--== End Call To Action ==-->

<!--== Start Products  Area ==-->
<div id="product-area-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-content-wrap">
                    <!-- Product Tab Menu Start -->
                    <nav class="product-teb-menu">
                        <ul class="nav justify-content-center" role="tablist">
                            <li><a class="active" href="#new-products" id="new-product-tab" data-bs-toggle="tab">Sản phẩm mới</a></li>

                        </ul>
                    </nav>
                    <!-- Product Tab Menu End -->

                    <!-- Product Tab Content Start -->
                    <div class="tab-content" id="productContent">
                        <div class="tab-pane fade show active" id="new-products" role="tabpanel">
                            <div class="products-wrapper">
                                <div class="product-carousel owl-carousel">
                                    <!-- Single Product Start -->
                                    <?php
                                    foreach ($spnew as $key) {
                                        extract($key);
                                        $hinh = "upload/" . $img_sp;
                                        $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                                        $format_number_1 = number_format($price_sp);
                                        echo '
                                            <div class="single-product-item">
                                        <figure class="product-thumb">
                                            <a href="' . $linksp . '">
                                                <img style="width: 100%; height: 200px;" src="' . $hinh . '"
                                            alt="Product" ></a>
                                            
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title"><a href="' . $linksp . '">' . $name_sp . '</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="product-price">' . $format_number_1 . 'Đ</span>

                                            <div class="product-meta">
                                                <form action="index.php?act=cart" method="post">
                                                   <input type="hidden" name="id_sp" value="' . $id_sp . '">
                                                   <input type="hidden" name="name_sp" value="' . $name_sp . '">
                                                   <input type="hidden" name="img_sp" value="' . $img_sp . '">
                                                   <input type="hidden" name="price_sp" value="' . $price_sp . '">
                                                   <input type="submit" onclick="confirmDesactiv()" name="add_to_cart" value="THÊM VÀO GIỎ HÀNG" style="background-color: #73b320;
                                                   border: none;
                                                   color: #fff;
                                                   font-weight: 600;
                                                   line-height: 1.2;
                                                   margin: 0;
                                                   padding: 10px 25px;
                                                   text-transform: uppercase;
                                                   outline: none;
                                                   border-radius: 0;
                                                   font-size: 1.4rem;
                                                   margin-left: 55px;
                                                   ">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                            ';
                                    }
                                    ?>
                                    <!-- Single Product End -->

                                    <!-- Single Product Start -->
                                    <!-- <div class="single-product-item"> -->
                                    <!-- <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets_fontend/img/product-2.jpg"
                                                                               alt="Product"></a>
                                            <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                               data-bs-toggle="modal" data-bs-target="#quickView"><i
                                                    class="fa fa-eye"></i></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title"><a href="single-product.html">Compete Track
                                                Tote</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="product-price">$40.99</span>

                                            <div class="product-meta">
                                                <a href="#" class="btn btn-round btn-cart" title="Add to Cart"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                   title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- Single Product End -->

                                    <!-- Single Product Start -->
                                    <!-- <div class="single-product-item"> -->
                                    <!-- <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets_fontend/img/product-3.jpg"
                                                                               alt="Product"></a>
                                            <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                               data-bs-toggle="modal" data-bs-target="#quickView"><i
                                                    class="fa fa-eye"></i></a>
                                        </figure> -->
                                    <!-- <div class="product-details">
                                            <h2 class="product-title"><a href="single-product.html">Voyage Yoga Bag</a>
                                            </h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="product-price">$11111</span>

                                            <div class="product-meta">
                                                <a href="#" class="btn btn-round btn-cart" title="Add to Cart"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                   title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div> -->
                                    <!-- </div> -->
                                    <!-- Single Product End -->

                                    <!-- Single Product Start -->
                                    <!-- <div class="single-product-item"> -->
                                    <!-- <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets_fontend/img/product-4.jpg"
                                                                               alt="Product"></a>
                                            <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                               data-bs-toggle="modal" data-bs-target="#quickView"><i
                                                    class="fa fa-eye"></i></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title"><a href="single-product.html">Chaz Kangeroo
                                                Hoodie</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="product-price">$40.99</span>

                                            <div class="product-meta">
                                                <a href="#" class="btn btn-round btn-cart" title="Add to Cart"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                   title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- Single Product End -->

                                    <!-- Single Product Start -->
                                    <!-- <div class="single-product-item"> -->
                                    <!-- <figure class="product-thumb">
                                            <a href="single-product.html">
                                                <img src="assets_fontend/img/product-5.jpg"
                                                                               alt="Product"></a>
                                            <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                               data-bs-toggle="modal" data-bs-target="#quickView"><i
                                                    class="fa fa-eye"></i></a>
                                        </figure> -->
                                    <!-- <div class="product-details">
                                            <h2 class="product-title"><a href="single-product.html">
                                                Endeavor Daytrip Backpack</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="product-price">$40.99</span>

                                            <div class="product-meta">
                                                <a href="#" class="btn btn-round btn-cart" title="Add to Cart"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                   title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div> -->
                                    <!-- </div> -->
                                    <!-- Single Product End -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="sale-products" role="tabpanel">
                            <div class="products-wrapper">
                                <div class="product-carousel owl-carousel">
                                    <!-- Single Product Start -->
                                    <div class="single-product-item">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets_fontend/img/product-1.jpg" alt="Product"></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title"><a href="single-product.html">Rival Field
                                                    Messenger</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="price-box d-flex">
                                                <span class="product-price">$20.99</span>
                                                <del class="product-price sale">$40.99</del>
                                            </div>

                                            <div class="product-meta">
                                                <a href="#" class="btn btn-round btn-cart" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="wishlist.html" class="btn btn-round btn-cart" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a href="compare.html" class="btn btn-round btn-cart" title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->

                                    <!-- Single Product Start -->
                                    <div class="single-product-item">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets_fontend/img/product-2.jpg" alt="Product"></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title"><a href="single-product.html">Compete Track
                                                    Tote</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="price-box d-flex">
                                                <span class="product-price">$33.99</span>
                                                <del class="product-price sale">$44.99</del>
                                            </div>

                                            <div class="product-meta">
                                                <a href="#" class="btn btn-round btn-cart" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="wishlist.html" class="btn btn-round btn-cart" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a href="compare.html" class="btn btn-round btn-cart" title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->

                                    <!-- Single Product Start -->
                                    <div class="single-product-item">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets_fontend/img/product-3.jpg" alt="Product"></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title"><a href="single-product.html">Voyage Yoga Bag</a>
                                            </h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="price-box d-flex">
                                                <span class="product-price">77.99</span>
                                                <del class="product-price sale">55.99</del>
                                            </div>

                                            <div class="product-meta">
                                                <a href="#" class="btn btn-round btn-cart" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="wishlist.html" class="btn btn-round btn-cart" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a href="compare.html" class="btn btn-round btn-cart" title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->

                                    <!-- Single Product Start -->
                                    <div class="single-product-item">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets_fontend/img/product-4.jpg" alt="Product"></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title"><a href="single-product.html">Chaz Kangeroo
                                                    Hoodie</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="product-price">$40.99</span>

                                            <div class="product-meta">
                                                <a href="#" class="btn btn-round btn-cart" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="wishlist.html" class="btn btn-round btn-cart" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a href="compare.html" class="btn btn-round btn-cart" title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->

                                    <!-- Single Product Start -->
                                    <div class="single-product-item">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets_fontend/img/product-5.jpg" alt="Product"></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title"><a href="single-product.html">Endeavor Daytrip
                                                    Backpack</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="price-box d-flex">
                                                <span class="product-price">$88.99</span>
                                                <del class="product-price sale">$99.99</del>
                                            </div>

                                            <div class="product-meta">
                                                <a href="#" class="btn btn-round btn-cart" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="wishlist.html" class="btn btn-round btn-cart" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a href="compare.html" class="btn btn-round btn-cart" title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="feature-products" role="tabpanel">
                            <div class="products-wrapper">
                                <div class="product-carousel owl-carousel">
                                    <!-- Single Product Start -->
                                    <div class="single-product-item">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets_fontend/img/product-1.jpg" alt="Product"></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title"><a href="single-product.html">Rival Field
                                                    Messenger</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="price-box d-flex">
                                                <span class="product-price">$20.99</span>
                                                <del class="product-price sale">$40.99</del>
                                            </div>

                                            <div class="product-meta">
                                                <a href="#" class="btn btn-round btn-cart" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="wishlist.html" class="btn btn-round btn-cart" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a href="compare.html" class="btn btn-round btn-cart" title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->

                                    <!-- Single Product Start -->
                                    <div class="single-product-item">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets_fontend/img/product-2.jpg" alt="Product"></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title"><a href="single-product.html">Compete Track
                                                    Tote</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="price-box d-flex">
                                                <span class="product-price">$33.99</span>
                                                <del class="product-price sale">$44.99</del>
                                            </div>

                                            <div class="product-meta">
                                                <a href="#" class="btn btn-round btn-cart" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="wishlist.html" class="btn btn-round btn-cart" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a href="compare.html" class="btn btn-round btn-cart" title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->

                                    <!-- Single Product Start -->
                                    <div class="single-product-item">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets_fontend/img/product-3.jpg" alt="Product"></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title"><a href="single-product.html">Voyage Yoga Bag</a>
                                            </h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="price-box d-flex">
                                                <span class="product-price">77.99</span>
                                                <del class="product-price sale">55.99</del>
                                            </div>

                                            <div class="product-meta">
                                                <a href="#" class="btn btn-round btn-cart" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="wishlist.html" class="btn btn-round btn-cart" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a href="compare.html" class="btn btn-round btn-cart" title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->

                                    <!-- Single Product Start -->
                                    <div class="single-product-item">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets_fontend/img/product-4.jpg" alt="Product"></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title"><a href="single-product.html">Chaz Kangeroo
                                                    Hoodie</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="product-price">$40.99</span>

                                            <div class="product-meta">
                                                <a href="#" class="btn btn-round btn-cart" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="wishlist.html" class="btn btn-round btn-cart" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a href="compare.html" class="btn btn-round btn-cart" title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->

                                    <!-- Single Product Start -->
                                    <div class="single-product-item">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets_fontend/img/product-5.jpg" alt="Product"></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title"><a href="single-product.html">Endeavor Daytrip
                                                    Backpack</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="price-box d-flex">
                                                <span class="product-price">$88.99</span>
                                                <del class="product-price sale">$99.99</del>
                                            </div>

                                            <div class="product-meta">
                                                <a href="#" class="btn btn-round btn-cart" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="wishlist.html" class="btn btn-round btn-cart" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a href="compare.html" class="btn btn-round btn-cart" title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Tab Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Products  Area ==-->

<!-- Start Sale Banner Area -->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="shop.html">
                    <img src="assets_fontend/img/banner-home-one.jpg" alt="Banner" style="margin-left: 67px;" />
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Sale Banner Area -->

<!-- Start Product By Category -->
<section id="productsby-category">
    <div class="container">
        <div class="productby-cate-content">
            <div class="row">
                <!-- Single Category Product Start -->
                <div class="col-lg-6">
                    <div class="category-product-wrap">
                        <h4 class="cate-pro-title"><a href="shop.html">PHONE</a></h4>
                        <figure class="cat-banner">
                            <a href="shop.html"><img style="height: 280px;" src="assets_fontend/img/banner-laptop1.jpg" alt="Category"></a>
                        </figure>

                        <div class="products-wrapper">
                            <div class="cat-pro-carousel owl-carousel">
                                <!-- Single Product Start -->
                                <?php
                                foreach ($spnew3 as $key) {
                                    extract($key);

                                    $hinh = "upload/" . $img_sp;
                                    $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                                    $format_number_1 = number_format($price_sp);
                                    echo '
                                      <div class="single-product-item">
                                      <figure class="product-thumb">
                                          <a href="' . $linksp . '">
                                          <img style="width: 306px; height: 300px;" src="' . $hinh . '"
                                                                             alt="Product"></a>
                                          
                                      </figure>
                                      <div class="product-details">
                                          <h2 class="product-title">
                                          <a href="' . $linksp . '">' . $name_sp . '</a></h2>
                                         
                                          <span class="product-price">' . $format_number_1 . 'Đ</span>
  
                                          <div class="product-meta">
                                          <form action="index.php?act=cart" method="post">
                                          <input type="hidden" name="id_sp" value="' . $id_sp . '">
                                          <input type="hidden" name="name_sp" value="' . $name_sp . '">
                                          <input type="hidden" name="img_sp" value="' . $img_sp . '">
                                          <input type="hidden" name="price_sp" value="' . $price_sp . '">
                                          <input type="submit" onclick="confirmDesactiv()" name="add_to_cart" value="THÊM VÀO GIỎ HÀNG" style="background-color: #73b320;
                                          border: none;
                                          color: #fff;
                                          font-weight: 600;
                                          line-height: 1.2;
                                          margin: 0;
                                          padding: 10px 25px;
                                          text-transform: uppercase;
                                          outline: none;
                                          border-radius: 0;
                                          font-size: 1.4rem;
                                          margin-left: 55px;
                                          ">
                                       </form>
                                          </div>
                                      </div>
                                  </div>
                                      ';
                                }
                                ?>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <!-- Single Product End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Category Product End -->

                <!-- Single Category Product Start -->
                <div class="col-lg-6">
                    <div class="category-product-wrap">
                        <h4 class="cate-pro-title"><a href="shop.html">PHONE</a></h4>
                        <figure class="cat-banner">
                            <a href="shop.html"><img style="height: 280px;" src="assets_fontend/img/banner-laptop2.jpg" alt="Category"></a>
                        </figure>

                        <div class="products-wrapper">
                            <div class="cat-pro-carousel owl-carousel">
                                <!-- Single Product Start -->
                                <?php
                                foreach ($spnew4 as $key) {
                                    extract($key);
                                    $format_number_1 = number_format($price_sp);

                                    $hinh = "upload/" . $img_sp;
                                    $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                                    echo '
                                      <div class="single-product-item">
                                      <figure class="product-thumb">
                                          <a href="' . $linksp . '"><img style="width: 306px; height: 300px;" src="' . $hinh . '"
                                                                             alt="Product"></a>
                                          <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                             data-bs-toggle="modal" data-bs-target="#quickView"><i class="fa fa-eye"></i></a>
                                      </figure>
                                      <div class="product-details">
                                          <h2 class="product-title">
                                          <a href="' . $linksp . '">' . $name_sp . '</a>
                                          </h2>
                                          <div class="rating">
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                          </div>
                                          <span class="product-price">' . $format_number_1 . 'Đ</span>
  
                                          <div class="product-meta">
                                          <form action="index.php?act=cart" method="post">
                                          <input type="hidden" name="id_sp" value="' . $id_sp . '">
                                          <input type="hidden" name="name_sp" value="' . $name_sp . '">
                                          <input type="hidden" name="img_sp" value="' . $img_sp . '">
                                          <input type="hidden" name="price_sp" value="' . $price_sp . '">
                                          <input type="submit" onclick="confirmDesactiv()" name="add_to_cart" value="THÊM VÀO GIỎ HÀNG" style="background-color: #73b320;
                                          border: none;
                                          color: #fff;
                                          font-weight: 600;
                                          line-height: 1.2;
                                          margin: 0;
                                          padding: 10px 25px;
                                          text-transform: uppercase;
                                          outline: none;
                                          border-radius: 0;
                                          font-size: 1.4rem;
                                          margin-left: 55px;
                                          ">
                                       </form>
                                          </div>
                                      </div>
                                  </div>
                                      ';
                                }
                                ?>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <!-- Single Product End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Category Product End -->

                <!-- Single Category Product Start -->
                <div class="col-lg-6">
                    <div class="category-product-wrap">
                        <h4 class="cate-pro-title"><a href="shop.html">PHONE </a></h4>
                        <figure class="cat-banner">
                            <a href="shop.html"><img style="height: 249px;" src="assets_fontend/img/banner-laptop3.webp" alt="Category"></a>
                        </figure>

                        <div class="products-wrapper">
                            <div class="cat-pro-carousel owl-carousel">
                                <!-- Single Product Start -->
                                <?php
                                foreach ($spnew5 as $key) {
                                    extract($key);
                                    $format_number_1 = number_format($price_sp);
                                    $hinh = "upload/" . $img_sp;
                                    $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                                    echo '
                                      <div class="single-product-item">
                                      <figure class="product-thumb">
                                          <a href="' . $linksp . '"><img style="width: 306px; height: 300px;" src="' . $hinh . '"
                                                                             alt="Product"></a>
                                          <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                             data-bs-toggle="modal" data-bs-target="#quickView"><i class="fa fa-eye"></i></a>
                                      </figure>
                                      <div class="product-details">
                                          <h2 class="product-title"><a href="single-product.html">' . $name_sp . '</a></h2>
                                          <div class="rating">
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                          </div>
                                          <span class="product-price">' . $format_number_1 . 'Đ</span>
  
                                          <div class="product-meta">
                                          <form action="index.php?act=cart" method="post">
                                          <input type="hidden" name="id_sp" value="' . $id_sp . '">
                                          <input type="hidden" name="name_sp" value="' . $name_sp . '">
                                          <input type="hidden" name="img_sp" value="' . $img_sp . '">
                                          <input type="hidden" name="price_sp" value="' . $price_sp . '">
                                          <input type="submit" onclick="confirmDesactiv()" name="add_to_cart" value="THÊM VÀO GIỎ HÀNG" style="background-color: #73b320;
                                          border: none;
                                          color: #fff;
                                          font-weight: 600;
                                          line-height: 1.2;
                                          margin: 0;
                                          padding: 10px 25px;
                                          text-transform: uppercase;
                                          outline: none;
                                          border-radius: 0;
                                          font-size: 1.4rem;
                                          margin-left: 55px;
                                          ">
                                       </form>
                                          </div>
                                      </div>
                                  </div>
                                      ';
                                }
                                ?>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <!-- Single Product End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Category Product End -->

                <!-- Single Category Product Start -->
                <div class="col-lg-6">
                    <div class="category-product-wrap">
                        <h4 class="cate-pro-title"><a href="shop.html">PHONE</a></h4>
                        <figure class="cat-banner">
                            <a href="shop.html"><img height="250px" src="assets_fontend/img/banner-laptop4.webp" alt="Category"></a>
                        </figure>

                        <div class="products-wrapper">
                            <div class="cat-pro-carousel owl-carousel">
                                <!-- Single Product Start -->
                                <?php
                                foreach ($spnew6 as $key) {
                                    extract($key);
                                    $format_number_1 = number_format($price_sp);
                                    $hinh = "upload/" . $img_sp;
                                    $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                                    echo '
                                      <div class="single-product-item">
                                      <figure class="product-thumb">
                                          <a href="' . $linksp . '"><img style="width: 306px; height: 300px;" src="' . $hinh . '"
                                                                             alt="Product"></a>
                                          <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                             data-bs-toggle="modal" data-bs-target="#quickView"><i class="fa fa-eye"></i></a>
                                      </figure>
                                      <div class="product-details">
                                          <h2 class="product-title"><a href="' . $linksp . '">' . $name_sp . '</a></h2>
                                          <div class="rating">
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                          </div>
                                          <span class="product-price">' . $format_number_1 . 'Đ</span>
  
                                          <div class="product-meta">
                                          <form action="index.php?act=cart" method="post">
                                          <input type="hidden" name="id_sp" value="' . $id_sp . '">
                                          <input type="hidden" name="name_sp" value="' . $name_sp . '">
                                          <input type="hidden" name="img_sp" value="' . $img_sp . '">
                                          <input type="hidden" name="price_sp" value="' . $price_sp . '">
                                          <input type="submit" onclick="confirmDesactiv()" name="add_to_cart" value="THÊM VÀO GIỎ HÀNG" style="background-color: #73b320;
                                          border: none;
                                          color: #fff;
                                          font-weight: 600;
                                          line-height: 1.2;
                                          margin: 0;
                                          padding: 10px 25px;
                                          text-transform: uppercase;
                                          outline: none;
                                          border-radius: 0;
                                          font-size: 1.4rem;
                                          margin-left: 55px;
                                          ">
                                       </form>
                                          </div>
                                      </div>
                                  </div>
                                      ';
                                }
                                ?>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <!-- Single Product End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Category Product End -->

                <!-- Single Category Product Start -->
                <div class="col-lg-6">
                    <div class="category-product-wrap">
                        <h4 class="cate-pro-title"><a href="shop.html">PHONE</a></h4>
                        <figure class="cat-banner">
                            <a href="shop.html"><img src="assets_fontend/img/cat-pro-2.jpg" alt="Category"></a>
                        </figure>

                        <div class="products-wrapper">
                            <div class="cat-pro-carousel owl-carousel">
                                <!-- Single Product Start -->
                                <?php
                                foreach ($spnew7 as $key) {
                                    extract($key);
                                    $format_number_1 = number_format($price_sp);
                                    $hinh = "upload/" . $img_sp;
                                    $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                                    echo '
                                      <div class="single-product-item">
                                      <figure class="product-thumb">
                                          <a href="' . $linksp . '"><img style="width: 306px; height: 300px;" src="' . $hinh . '"
                                                                             alt="Product"></a>
                                          <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                             data-bs-toggle="modal" data-bs-target="#quickView"><i class="fa fa-eye"></i></a>
                                      </figure>
                                      <div class="product-details">
                                          <h2 class="product-title"><a href="' . $linksp . '">' . $name_sp . '</a></h2>
                                          <div class="rating">
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                          </div>
                                          <span class="product-price">' . $format_number_1 . 'Đ</span>
  
                                          <div class="product-meta">
                                          <form action="index.php?act=cart" method="post">
                                          <input type="hidden" name="id_sp" value="' . $id_sp . '">
                                          <input type="hidden" name="name_sp" value="' . $name_sp . '">
                                          <input type="hidden" name="img_sp" value="' . $img_sp . '">
                                          <input type="hidden" name="price_sp" value="' . $price_sp . '">
                                          <input type="submit" onclick="confirmDesactiv()" name="add_to_cart" value="THÊM VÀO GIỎ HÀNG" style="background-color: #73b320;
                                          border: none;
                                          color: #fff;
                                          font-weight: 600;
                                          line-height: 1.2;
                                          margin: 0;
                                          padding: 10px 25px;
                                          text-transform: uppercase;
                                          outline: none;
                                          border-radius: 0;
                                          font-size: 1.4rem;
                                          margin-left: 55px;
                                          ">
                                       </form>
                                          </div>
                                      </div>
                                  </div>
                                      ';
                                }
                                ?>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <!-- Single Product End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Category Product End -->

                <!-- Single Category Product Start -->
                <div class="col-lg-6">
                    <div class="category-product-wrap">
                        <h4 class="cate-pro-title"><a href="shop.html">PHONE</a></h4>
                        <figure class="cat-banner">
                            <a href="shop.html"><img src="assets_fontend/img/cat-pro-2.jpg" alt="Category"></a>
                        </figure>

                        <div class="products-wrapper">
                            <div class="cat-pro-carousel owl-carousel">
                                <!-- Single Product Start -->
                                <?php
                                foreach ($spnew1 as $key) {
                                    extract($key);
                                    $format_number_1 = number_format($price_sp);
                                    $hinh = "upload/" . $img_sp;
                                    $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                                    echo '
                                      <div class="single-product-item">
                                      <figure class="product-thumb">
                                          <a href="' . $linksp . '"><img style="width: 306px; height: 300px;" src="' . $hinh . '"
                                                                             alt="Product"></a>
                                          <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                             data-bs-toggle="modal" data-bs-target="#quickView"><i class="fa fa-eye"></i></a>
                                      </figure>
                                      <div class="product-details">
                                          <h2 class="product-title"><a href="' . $linksp . '">' . $name_sp . '</a></h2>
                                          <div class="rating">
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                          </div>
                                          <span class="product-price">' . $format_number_1 . 'Đ</span>
  
                                          <div class="product-meta">
                                          <form action="index.php?act=cart" method="post">
                                          <input type="hidden" name="id_sp" value="' . $id_sp . '">
                                          <input type="hidden" name="name_sp" value="' . $name_sp . '">
                                          <input type="hidden" name="img_sp" value="' . $img_sp . '">
                                          <input type="hidden" name="price_sp" value="' . $price_sp . '">
                                          <input type="submit" onclick="confirmDesactiv()" name="add_to_cart" value="Thêm vào giỏ hàng" style="background-color: #73b320;
                                          border: none;
                                          color: #fff;
                                          font-weight: 600;
                                          line-height: 1.2;
                                          margin: 0;
                                          padding: 10px 25px;
                                          text-transform: uppercase;
                                          outline: none;
                                          border-radius: 0;
                                          font-size: 1.4rem;
                                          margin-left: 55px;
                                          ">
                                           </form>
                                          </div>
                                      </div>
                                  </div>
                                      ';
                                }
                                ?>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <!-- Single Product End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Category Product End -->
            </div>
        </div>
    </div>
</section>
<!-- End Product By Category -->
<!-- End Category Banner -->
<!--== End Recent Post & Reviews Area ==-->

<!--== Start Brand Carousel Area ==-->
<div class="brand-logo-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-logo-carousel owl-carousel">
                    <!-- Single Brand Logo Start -->
                    <div class="single-brand-item">
                        <a href="#"><img src="assets_fontend/img/logo-1.png" alt="brand"></a>
                    </div>
                    <!-- Single Brand Logo End -->

                    <!-- Single Brand Logo Start -->
                    <div class="single-brand-item">
                        <a href="#"><img src="assets_fontend/img/logo-2.png" alt="brand"></a>
                    </div>
                    <!-- Single Brand Logo End -->

                    <!-- Single Brand Logo Start -->
                    <div class="single-brand-item">
                        <a href="#"><img src="assets_fontend/img/logo-3.png" alt="brand"></a>
                    </div>
                    <!-- Single Brand Logo End -->

                    <!-- Single Brand Logo Start -->
                    <div class="single-brand-item">
                        <a href="#"><img src="assets_fontend/img/logo-4.png" alt="brand"></a>
                    </div>
                    <!-- Single Brand Logo End -->

                    <!-- Single Brand Logo Start -->
                    <div class="single-brand-item">
                        <a href="#"><img src="assets_fontend/img/logo-5.png" alt="brand"></a>
                    </div>
                    <!-- Single Brand Logo End -->

                    <!-- Single Brand Logo Start -->
                    <div class="single-brand-item">
                        <a href="#"><img src="assets_fontend/img/logo-6.png" alt="brand"></a>
                    </div>
                    <!-- Single Brand Logo End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Brand Carousel Area ==-->
<script>
    function confirmDesactiv() {
        if (alert('Chúc mừng bạn đã thêm vào dỏ hàng thành công.'))
            return true;

        return false;
    }
</script>