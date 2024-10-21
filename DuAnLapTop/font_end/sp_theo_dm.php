
<!--== End Header Section ==-->

<!--== Start Page Breadcrumb ==-->
<div class="page-breadcrumb-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-breadcrumb">
                    <ul class="nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html" class="active">Shop</a></li>
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
            <!-- Sidebar Area Start -->
            <div class="col-lg-3">
                <div id="sidebar-area-wrap">
                    <!-- Single Sidebar Item Start -->
                    <div class="single-sidebar-wrap">
                        <h2 class="sidebar-title">Shop By</h2>
                        <div class="sidebar-body">
                            <div class="shopping-option d-block d-sm-flex d-lg-block">
                                <div class="shopping-option-item">
                                    <!-- <h4>MANUFACTURER</h4>
                                    <ul class="sidebar-list">
                                        <li><a href="#">Dolce <span>(19)</span></a></li>
                                        <li><a href="#">Gabbana <span>(4)</span></a></li>
                                        <li><a href="#">Nike <span>(3)</span></a></li>
                                        <li><a href="#">Nokia <span>(5)</span></a></li>
                                        <li><a href="#">Xiaomi <span>(7)</span></a></li>
                                        <li><a href="#">Other <span>(33)</span></a></li>
                                    </ul> -->
                                </div>

                                <div class="shopping-option-item">
                                    <!-- <h4>Price</h4>
                                    <ul class="sidebar-list">
                                        <li><a href="#">$0.00 - $9.99 <span>(2)</span></a></li>
                                        <li><a href="#">$10.00 - $19.99 <span>(3)</span></a></li>
                                        <li><a href="#">$20.00 - $29.99 <span>(5)</span></a></li>
                                        <li><a href="#">$30.00 - $39.99 <span>(2)</span></a></li>
                                        <li><a href="#">$40.00 - $49.99 <span>(10)</span></a></li>
                                        <li><a href="#">$50.00 - $59.99 <span>(12)</span></a></li>
                                    </ul> -->
                                </div>

                                <div class="shopping-option-item d-sm-none d-md-block">
                                    <!-- <h4>Color</h4> -->
                                    <!-- <ul class="color-option-select d-flex">
                                        <li class="color-item black">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">Black</span>
                                            </div>
                                        </li>

                                        <li class="color-item green">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">green</span>
                                            </div>
                                        </li>

                                        <li class="color-item red">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">red</span>
                                            </div>
                                        </li>

                                        <li class="color-item yellow">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">yellow</span>
                                            </div>
                                        </li>

                                        <li class="color-item orange">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">Orange</span>
                                            </div>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Sidebar Item End -->

                    <!-- Single Sidebar Item Start -->
                    <!-- Single Sidebar Item End -->
                </div>
            </div>
            <!-- Sidebar Area End -->

            <!-- Start Shop Page Content -->
            <div class="col-lg-9 order-first order-lg-last">
                <div class="shop-page-content-wrap">
                    <div class="products-settings-option d-block d-md-flex">
                        <div class="product-cong-left d-flex align-items-center">
                            <ul class="product-view d-flex align-items-center">
                                <li class="box-gird current"><i class="fa fa-th"></i></li>
                                <li class="list"><i class="fa fa-list-ul"></i></li>
                            </ul>
                            <span class="show-items">Items 1 - 9 of 17</span>
                        </div>

                        <div class="product-sort_by d-flex align-items-center mt-3 mt-md-0">
                            <!-- <label for="sort">Sort By:</label>
                            <select name="sort" id="sort">
                                <option value="Position">Relevance</option>
                                <option value="Name Ascen">Name, A to Z</option>
                                <option value="Name Decen">Name, Z to A</option>
                                <option value="Price Ascen">Price low to heigh</option>
                                <option value="Price Decen">Price heigh to low</option>
                            </select> -->
                        </div>
                    </div>

                    <div class="shop-page-products-wrap">
                        <div class="products-wrapper">
                            <div class="row">
                                <!-- Single Product Start -->
                                <?php 
                                     foreach ($dssp as $key) {
                                        extract($key);
                                        $hinh = "upload/".$img_sp;
                                        $format_number_1 = number_format($price_sp);
                                        $linksp = "index.php?act=sanphamct&id_sp=".$id_sp;
                                        echo '
                                        <div class="col-lg-4 col-sm-6">
                                        <div class="single-product-item">
                                            <figure class="product-thumb">
                                                <a href="'.$linksp.'">
                                                <img src="'.$hinh.'" alt="Product">
                                                </a>
                                               
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title"><a href="'.$linksp.'">'.$name_sp.'</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <span class="product-price">'.$format_number_1.' Đ</span>
    
    
                                                <div class="product-meta">
                                          <form action="index.php?act=cart" method="post">
                                          <input type="hidden" name="id_sp" value="'.$id_sp.'">
                                          <input type="hidden" name="name_sp" value="'.$name_sp.'">
                                          <input type="hidden" name="img_sp" value="'.$img_sp.'">
                                          <input type="hidden" name="price_sp" value="'.$price_sp.'">
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
                                    </div>
                                        ';
                                     }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="products-settings-option d-block d-md-flex">
                        <nav class="page-pagination">
                            <ul class="pagination">
                                <li><a href="#" aria-label="Previous">&laquo;</a></li>
                                <li><a class="current" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#" aria-label="Next">&raquo;</a></li>
                            </ul>
                        </nav>

                        <div class="product-per-page d-flex align-items-center mt-3 mt-md-0">
                            <label for="show-per-page">Show Per Page</label>
                            <select name="sort" id="show-per-page">
                                <option value="9">12</option>
                                <option value="15">15</option>
                                <option value="21">18</option>
                                <option value="6">21</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Shop Page Content -->
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->

<!--== Start Newsletter Area ==-->
<script>
        function confirmDesactiv()
{
   if(alert('Chúc mừng bạn đã thêm vào giỏ hàng thành công.'))
     return true;
  
  return false;
}
</script>