
<!--== Start Page Breadcrumb ==-->
<div class="page-breadcrumb-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-breadcrumb">
                    <ul class="nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html" class="active">Bảng điều khiển</a></li>
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
            <div class="col-lg-12">
                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-bs-toggle="tab"><i class="fa fa-dashboard"></i>
                                Bảng điều khiển
                                </a>
                                <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> Địa chỉ</a>

                                <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Chi tiết tài khoản</a>

                                <a href="index.php?act=log_out" <?php echo isset($_SESSION['user']) ? "" : "hidden" ?>><i class="fa fa-sign-out"></i> Đăng xuất</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 mt-15 mt-lg-0">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Bảng điều khiển</h3>

                                        <?php 
                                            if (isset($_SESSION['user'])) {
                                                extract($_SESSION['user']);
                                                if ($role == 0) {
                                                    echo '
                                                <div class="welcome">
                                            <p>Hello, <strong>'. $name_tk .'</strong> (If Not <strong>Tuntuni !</strong><a
                                                    href="login-register.html" class="logout"> Logout</a>)</p>
                                              </div>
                                                ';
                                                }else{
                                                    echo '
                                                <div class="welcome">
                                            <p>Hello, <strong>Bạn</strong> (If Not <strong>Tuntuni !</strong><a
                                                    href="login-register.html" class="logout"> Logout</a>)</p>
                                              </div>
                                                ';
                                                }
                                            }
                                        ?>

                                        <p class="mb-0">Từ trang tổng quan tài khoản của bạn. bạn có thể dễ dàng kiểm tra và xem các đơn đặt hàng gần đây,
                                             quản lý địa chỉ giao hàng và thanh toán cũng như chỉnh sửa mật khẩu và chi tiết tài khoản của mình.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                 <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Aug 22, 2022</td>
                                                    <td>Pending</td>
                                                    <td>$3000</td>
                                                    <td><a href="cart.html" class="btn">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>July 22, 2022</td>
                                                    <td>Approved</td>
                                                    <td>$200</td>
                                                    <td><a href="cart.html" class="btn">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>June 12, 2017</td>
                                                    <td>On Hold</td>
                                                    <td>$990</td>
                                                    <td><a href="cart.html" class="btn">View</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                 <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Downloads</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Date</th>
                                                    <th>Expire</th>
                                                    <th>Download</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>Haven - Free Real Estate PSD Template</td>
                                                    <td>Aug 22, 2022</td>
                                                    <td>Yes</td>
                                                    <td><a href="#" class="btn">Download File</a></td>
                                                </tr>
                                                <tr>
                                                    <td>HasTech - Profolio Business Template</td>
                                                    <td>Sep 12, 2022</td>
                                                    <td>Never</td>
                                                    <td><a href="#" class="btn">Download File</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Payment Method</h3>

                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Địa chỉ thanh toán</h3>
                                        <address>
                                            <p><strong>Alex Tuntuni</strong></p>
                                            <p>1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>

                                        <a href="#" class="btn d-inline-block"><i class="fa fa-edit"></i> Edit
                                            Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Chi tiết tài khoản</h3>
                                        <div class="account-details-form">
                                            <form action="index.php?act=changes" method="post">
                                            <?php 
                                            if (isset($_SESSION['user']) &&(is_array($_SESSION['user']))) {
                                                extract($_SESSION['user']);
                                                if ($role == 1|| $role==0) {
                                                    echo '
                                                <div class="single-input-item">
                                                    <label class="required">Tên :</label>
                                                    <input type="text" name="name_tk" value="'.$name_tk.'" id="email" placeholder="Tên"/>
                                                </div>
                                                <div class="single-input-item">
                                                    <label  class="required">Mật khẩu :</label>
                                                    <input type="text"  name="pass_tk"  value="'.$pass_tk.'" id="email" placeholder="Mật khẩu"/>
                                                </div>
                                                <div class="single-input-item">
                                                    <label class="required">Email : </label>
                                                    <input type="email"  name="email_tk"  value="'.$email_tk.'" id="email" placeholder="Email "/>
                                                </div>
                                                <div class="single-input-item">
                                                    <label  class="required">Địa chỉ :</label>
                                                    <input type="text"  name="address_tk"  value="'.$address_tk.'" id="email" placeholder="Địa chỉ"/>
                                                </div>
                                                <div class="single-input-item">
                                                    <label class="required">Số điện thoại : </label>
                                                    <input type="text"  name="tel_tk"  value="'.$tel_tk.'" id="email" placeholder="Số điện thoại"/>
                                                </div>
                                                <div class="single-input-item">
                                                    <input type="hidden" name="id_tk" value="'.$id_tk.'">
                                                <input type="submit" name="capnhat" value="Cập nhật" style="width: 150px; background-color: #73b320; font-weight: 600; color: white; text-transform: uppercase;">
                                                </div>
                                                ';
                                                }else{
                                                    echo '
                                                <div class="single-input-item">
                                                    <label class="required">Tên :</label>
                                                    <input type="text" name="name_tk" value="" id="email" placeholder="Tên"/>
                                                </div>
                                                <div class="single-input-item">
                                                    <label  class="required">Mật khẩu :</label>
                                                    <input type="text"  name="pass_tk"  value="" id="email" placeholder="Mật khẩu"/>
                                                </div>
                                                <div class="single-input-item">
                                                    <label class="required">Email : </label>
                                                    <input type="email"  name="email_tk"  value="" id="email" placeholder="Email "/>
                                                </div>
                                                <div class="single-input-item">
                                                    <label  class="required">Địa chỉ :</label>
                                                    <input type="text"  name="address_tk"  value="" id="email" placeholder="Địa chỉ"/>
                                                </div>
                                                <div class="single-input-item">
                                                    <label class="required">Số điện thoại : </label>
                                                    <input type="text"  name="tel_tk"  value="" id="email" placeholder="Số điện thoại"/>
                                                </div>
                                                <div class="single-input-item">
                                                    <input type="hidden" name="id_tk" value="">
                                                <input type="submit" name="capnhat" value="Cập nhật" style="width: 150px; background-color: #73b320; font-weight: 600; color: white; text-transform: uppercase;">
                                                </div>
                                                ';
                                                }
                                            }else{
                                                echo '
                                                <div class="single-input-item">
                                                    <label class="required">Tên :</label>
                                                    <input type="text" name="name_tk" value="" id="email" placeholder="Tên"/>
                                                </div>
                                                <div class="single-input-item">
                                                    <label  class="required">Mật khẩu :</label>
                                                    <input type="text"  name="pass_tk"  value="" id="email" placeholder="Mật khẩu"/>
                                                </div>
                                                <div class="single-input-item">
                                                    <label class="required">Email : </label>
                                                    <input type="email"  name="email_tk"  value="" id="email" placeholder="Email "/>
                                                </div>
                                                <div class="single-input-item">
                                                    <label  class="required">Địa chỉ :</label>
                                                    <input type="text"  name="address_tk"  value="" id="email" placeholder="Địa chỉ"/>
                                                </div>
                                                <div class="single-input-item">
                                                    <label class="required">Số điện thoại : </label>
                                                    <input type="text"  name="tel_tk"  value="" id="email" placeholder="Số điện thoại"/>
                                                </div>
                                                <div class="single-input-item">
                                                    <input type="hidden" name="id_tk" value="">
                                                <input type="submit" name="capnhat" value="Cập nhật" style="width: 150px; background-color: #73b320; font-weight: 600; color: white; text-transform: uppercase;">
                                                </div>
                                                ';
                                            }
                                        ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>
                </div>
                <!-- My Account Page End -->
            </div>
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->