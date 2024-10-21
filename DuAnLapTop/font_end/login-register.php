<!--== Start Page Breadcrumb ==-->
<div class="page-breadcrumb-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-breadcrumb">
                    <ul class="nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop.html" class="active">Member Area</a></li>
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
        <div class="member-area-from-wrap">
            <div class="row">
                <!-- Login Content Start -->
                <div class="col-lg-5">
                    <div class="login-reg-form-wrap  pr-lg-50">
                        <h2>Already a Member?</h2>

                        <form action="index.php?act=dangnhap" method="post">
                            <div>
                                <input type="text" name="name_tk" style="background-color: #f4f5f7;
                                        border: 1px solid #c5c5c5;
                                        padding: 15px 20px;
                                        outline: none;
                                        transition: all 0.4s ease-out;
                                        width: 100%;" placeholder="Nhập Tên" value="<?php echo isset($name_tk) ? htmlspecialchars($name_tk) : ''; ?>"  />
                                <small class="text-danger"><?php if (isset($usernameError)) {
                                    echo $usernameError;
                                } ?></small>
                            </div>

                            <div class="single-input-item">
                                <input type="password" name="pass_tk" value="<?php echo isset($pass_tk) ? htmlspecialchars($pass_tk) : ''; ?>"  placeholder="Nhập Password" />
                                <small class="text-danger"><?php if (isset($passwordError)) {
                                    echo $passwordError;
                                } ?></small>
                            </div>

                            <div class="single-input-item">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input w-auto" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                        </div>
                                    </div>
                                    <a href="#" class="forget-pwd">Quên mật khẩu?</a>
                                </div>
                            </div>

                            <div class="single-input-item">
                                <input type="submit" name="dangnhap" value="Đăng nhập"
                                    style="width: 150px; background-color: #73b320; font-weight: 600; color: white; text-transform: uppercase;">

                            </div>
                        </form>



                    </div>
                </div>
                <!-- Login Content End -->

                <!-- Register Content Start -->
                <div class="col-lg-7 mt-30 mt-lg-0">
                    <div class="login-reg-form-wrap">
                        <h2>Signup Form</h2>
                        <form action="index.php?act=dangky" method="post">
                            <div class="single-input-item">
                                <input type="text" name="name_tk" placeholder="Nhập tên"
                                    value="<?php echo isset($name_tk) ? htmlspecialchars($name_tk) : ''; ?>"  />
                                <small
                                    class="text-danger"><?php echo isset($usernameError1) ? $usernameError1 : ''; ?></small>
                            </div>
                            <div class="single-input-item">
                                <input type="password" name="pass_tk" placeholder="Nhập password"
                                    value="<?php echo isset($pass_tk) ? htmlspecialchars($pass_tk) : ''; ?>"  />
                                <small
                                    class="text-danger"><?php echo isset($passwordError1) ? $passwordError1 : ''; ?></small>
                            </div>
                            <div class="single-input-item">
                                <input type="email" name="email_tk" placeholder="Nhập Email"
                                    value="<?php echo isset($email_tk) ? htmlspecialchars($email_tk) : ''; ?>"
                                     />
                                <small class="text-danger"><?php echo isset($emailError) ? $emailError : ''; ?></small>
                            </div>
                            <div class="single-input-item">
                                <input type="text" name="address_tk" placeholder="Nhập Địa chỉ"
                                    value="<?php echo isset($address_tk) ? htmlspecialchars($address_tk) : ''; ?>"
                                     />
                                <small
                                    class="text-danger"><?php echo isset($addressError) ? $addressError : ''; ?></small>
                            </div>
                            <div class="single-input-item">
                                <input type="text" name="tel_tk" placeholder="Nhập sdt"
                                    value="<?php echo isset($tel_tk) ? htmlspecialchars($tel_tk) : ''; ?>"  />
                                <small class="text-danger"><?php echo isset($telError) ? $telError : ''; ?></small>
                            </div>
                            <div class="single-input-item">
                                <div class="login-reg-form-meta">
                                    <div class="remember-meta">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input w-auto"
                                                id="subnewsletter" <?php echo isset($subnewsletter) ? 'checked' : ''; ?> />
                                            <label class="custom-control-label" for="subnewsletter">Subscribe Our
                                                Newsletter</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-input-item">
                                <input type="submit" name="dangky" value="Đăng ký"
                                    style="width: 150px; background-color: #73b320; font-weight: 600; color: white; text-transform: uppercase;">
                                <input type="reset" value="Nhập lại"
                                    style="width: 150px; background-color: #73b320; font-weight: 600; color: white; text-transform: uppercase;">
                            </div>
                        </form>



                    </div>
                </div>
                <!-- Register Content End -->
            </div>
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->