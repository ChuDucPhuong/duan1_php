
<!--== End Header Section ==-->

<!--== Start Page Breadcrumb ==-->
<!--== End Page Breadcrumb ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper">
    <div class="container">
        <!-- Cart Page Content Start -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Cart Table Area -->
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="pro-thumbnail">Mã đơn hàng</th>
                            <th class="pro-title" style="width: 30px;">Số lượng</th>
                            <th class="pro-price">Ngày đặt hàng</th>
                            <th class="pro-subtotal">Tổng Tiền</th>
                            <th class="pro-thumbnail" >Trạng thái</th>
                            <th class="pro-thumbnail" >Chi tiết đơn hàng</th>
                                        
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if (is_array($list_bill)) {
                                    foreach ($list_bill as $bill) {
                                        extract($bill);
                                        $trang_thai_dh = get_ttdh($bill['status_bill']);
                                        $sl_sp = dem_sl_mat_hang($bill['id_bill']);
                                        $linkctdh ="index.php?act=chitietdh&id_bill=".$id_bill;
                                        echo '
                                        <tr>
                                        <td class="pro-thumbnail">'.$bill['id_bill'].'</td>
                                        <td class="pro-title" >'.$sl_sp.'</td>
                                        <td class="pro-price"><span>$'.$bill['ngaydathang'].'</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty">
                                            <p>'.$bill['tongtien_bill'].'</p>
                                            </div>
                                        </td>
                                        <td class="pro-title" >'.$trang_thai_dh.'</td>
                                        <td class="pro-title" ><a href="'.$linkctdh.'">Chi tiết đơn hàng</a></td>
                                        
                                        </tr>
                                        ';
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- Cart Update Option -->
                <div class="cart-update-option d-block d-lg-flex">
                    <div class="apply-coupon-wrapper">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 ms-auto">
                <!-- Cart Calculation Area -->
                <div class="cart-calculator-wrapper">
                    <h3>Tổng số giỏ hàng</h3>
                    <div class="cart-calculate-items">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                            <?php
                                $tongtien = 0;
                                $format_number_1 = 0;
                            foreach ($_SESSION['mua_cart'] as $bill) {
                                $ttien = $bill[3] * $bill[4];
                                $tongtien += $ttien;
                                $format_number_1 = number_format($tongtien);
                                $format_number_2 = number_format($bill[3]);
                                echo '
                                <tr>
                                    <td>'.$bill[1].'</td>
                                    <td>'.$format_number_2.'</td>
                                </tr>
                                ';
                            }
                            echo '
                            <tr>
                                <td>Tổng tiền</td>
                                <td class="total-amount">'.$format_number_1.'Đ</td>
                            </tr>
                            ';
                            ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Page Content End -->
    </div>
</div>
<!--== Page Content Wrapper End ==-->

<!--== Start Newsletter Area ==-->
<div class="newsletter-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto">
                <!-- Newsletter Content Start -->
                <div class="newsletter-content-wrap text-center text-lg-left d-lg-flex">
                    <h2><i class="fa fa-envelope-square"></i> Sign up for Newsletter</h2>
                    <div class="newsletter-form-wrap">
                        <form id="subscribe-form" action="https://htmlmail.hasthemes.com/raju/tienda-subscribe.php"
                              method="post">
                            <input type="email" name="newsletter_email" id="address"
                                   placeholder="Enter Your Email Address" required/>
                            <button class="btn" type="submit">Subscribe</button>
                        </form>
                        <!-- Show Error & Success Message -->
                        <div id="subscribeResult"></div>
                    </div>
                </div>
                <!-- Newsletter Content End -->
            </div>

            <div class="col-lg-3 m-auto text-center text-lg-right">
                <!-- Social Icons Area Start -->
                <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
                <!-- Social Icons Area End -->
            </div>
        </div>
    </div>
</div>
<!--== End Newsletter Area ==-->
<script>
    function confirmDesactiv()
{
   if(confirm("Chúc mừng bạn đã đặt hàng thành công"))
     return true;
  
  return false;
}
