
<!--== End Header Section ==-->

<!--== Start Page Breadcrumb ==-->
<div class="page-breadcrumb-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-breadcrumb">
                    <ul class="nav">
                        <li><a href="index.php?act=go_home">Home</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="#" class="active">MH02-Gray</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Breadcrumb ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper">
    <div class="container">
        <div class="row">
            <!-- Single Product Page Content Start -->
            <div class="col-lg-12">
                <div class="single-product-page-content">
                    <div class="row">
                        <!-- Product Thumbnail Start -->
                        <div class="col-lg-5">
                            <div class="product-thumbnail-wrap">
                                <div class="product-thumb-carousel owl-carousel">
                                    <div class="single-thumb-item">
                                        <?php 
                                        $anh = $img_path. $img_sp;
                                        echo '
                                        <a href=""><img class="img-fluid"
                                        src="' . $anh . '"
                                        alt="Product"/></a>
                                        ';
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Thumbnail End -->

                        <!-- Product Details Start -->
                        <div class="col-lg-7">
                            <div class="product-details">
                                <h2><a href="single-product.html"><?php echo $name_sp  ?></a></h2>

                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>

                                <span class="price"><?php echo number_format($price_sp) ?>Đ</span>

                                <div class="product-info-stock-sku">
                                    <p style="padding-top: 10px;"><b>Bảo hàng : </b> 12 Tháng Chính hãng</p>
                                </div>

                                <p class="products-desc"></p>
                                <?php 
                                echo '
                                <form action="index.php?act=cart" method="post">
                                                   <input type="hidden" name="id_sp" value="'.$id_sp.'">
                                                   <input type="hidden" name="name_sp" value="'.$name_sp.'">
                                                   <input type="hidden" name="img_sp" value="'.$img_sp.'">
                                                   <input type="hidden" name="price_sp" value="'.$price_sp.'">
                                                   <div class="product-quantity d-flex align-items-center">

                                <input type="submit" value="Thêm vào giỏ hàng" name="add_to_cart" style="    background-color: #73b320;
                                    border: none;
                                    color: #fff;
                                    font-weight: 600;
                                    line-height: 1.2;
                                    margin: 0;
                                    padding: 20px 25px;
                                    text-transform: uppercase;
                                    outline: none;
                                    border-radius: 0;
                                    font-size: 1.4rem;">
                                </div>
                                </form>
                                ';
                                ?>
                            </div>
                        </div>
                        <!-- Product Details End -->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Product Full Description Start -->
                            <div class="product-full-info-reviews">
                                <!-- Single Product tab Menu -->
                                <nav class="nav" id="nav-tab">
                                    <a class="active" id="description-tab" data-bs-toggle="tab" href="#description">Mô tả</a>
                                    <a id="reviews-tab" data-bs-toggle="tab" href="#reviews">Bình luận</a>
                                </nav>
                                <!-- Single Product tab Menu -->
                                <!-- Single Product tab Content -->
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="description">
                                        <p><?php echo $mota_sp  ?></p>
                                    </div>
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                    <script>
                                        $(document).ready(function(){
                                                $("#binhluan_sp").load("font_end/bl_sp.php", {idpro: <?=$id_sp?>});
                                        });
                                    </script>


                                    <div class="tab-pane fade" id="reviews" >
                                        <div class="row" id="binhluan_sp">
                                            <div class="col-lg-7">
                                                <div class="product-ratting-wrap" >
                                                    <div class="pro-avg-ratting" >
                                                        <h4>4.5 <span>(Overall)</span></h4>
                                                    </div>
                                                    <div class="rattings-wrapper" >
                                                        <div class="sin-rattings">
                                                            <div class="ratting-author">
                                                                <h3>Cristopher Lee</h3>
                                                                <div class="ratting-star">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <span>(5)</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="ratting-form-wrapper">
                                                        <h3>Add your Comments</h3>
                                                        <form action="#" method="post">
                                                            <div class="ratting-form row">
                                                                <div class="col-12 mb-4">
                                                                    <label for="your-review">Your Review:</label>
                                                                    <textarea name="review" id="your-review"
                                                                              placeholder="Write a review"></textarea>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input value="add review" type="submit">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product tab Content -->
                            </div>
                            <!-- Product Full Description End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Product Page Content End -->
        </div>
    </div>
</div>