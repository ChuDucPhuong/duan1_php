
<?php 
     if (isset($bill)&&(is_array($bill))) {
        extract($bill);
     }
?>
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
                            <th class="pro-thumbnail">Ảnh sản phẩm</th>
                            <th class="pro-title">Tên sản phẩm</th>
                            <th class="pro-price">Giá</th>
                            <th class="pro-subtotal">Số lượng</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $tongtien = 0;
                                $i = 0;
                                foreach ($billct as $cart) {
                                    $hinh = "upload/".$cart['img'];
                                    echo '
                                    <tr>
                                    <td class="pro-thumbnail"><img class="img-fluid" src="'.$hinh.'"
                                                                       alt="Product"/></td>
                                    <td class="pro-title">'.$cart['name'].'</td>
                                    <td class="pro-price"><span>$'.$cart['price'].'</span></td>
                                    <td class="pro-quantity">
                                    <div class="pro-qty">
                                    <p>'.$cart['soluong'].'</p>
                                    </div>
                                    </td>
                                    </tr>
                                    ';
                                    $i+=1;
                                }
                                echo '
                                <tr>
                                <td>
                                    '.$tongtien.';
                                </td>
                                </tr>
                                ';
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- Cart Update Option -->

            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 ms-auto">
                <!-- Cart Calculation Area -->
                <div class="cart-calculator-wrapper">
                    <h3>Thông tin đơn hàng</h3>
                    <div class="cart-calculate-items">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Mã đơn hàng</td>
                                    <td><?php echo $bill['id_bill']  ?></td>
                                </tr>
                                <tr>
                                    <td>Họ và tên</td>
                                    <td><?php echo $bill['name_bill']  ?></td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ nhận hàng</td>
                                    <td><?php echo $bill['address_bill']  ?></td>
                                </tr>
                                <tr>
                                    <td>Email người nhận</td>
                                    <td><?php echo $bill['email_bill']  ?></td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại người nhận</td>
                                    <td><?php echo $bill['tel_bill']  ?></td>
                                </tr>
                                <tr>
                                    <td>Ngày đặt hàng</td>
                                    <td><?php echo $bill['ngaydathang']  ?></td>
                                </tr>
                                <tr>
                                    <td>Phương thức thanh toán</td>
                                    <td><?php echo $bill['pttt_bill']  ?></td>
                                </tr>
                                <tr>
                                    <td>Tổng tiền</td>
                                    <td class="total-amount"><?php echo $bill['tongtien_bill']  ?></td>
                                </tr>
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
