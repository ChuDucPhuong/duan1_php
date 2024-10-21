<?php
session_start();
include "../model/pdo.php";
include "../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = load_bl_all($idpro);
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/tienda/tienda/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 15:28:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- <title>Tienda - Digital Products Store eCommerce Bootstrap 5 Template</title> -->

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="../assets_fontend/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700" rel="stylesheet">

    <!--=== Bootstrap CSS ===-->
    <link href="../assets_fontend/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!--=== Font-Awesome CSS ===-->
    <link href="../assets_fontend/css/vendor/font-awesome.css" rel="stylesheet">
    <!--=== Plugins CSS ===-->
    <link href="../assets_fontend/css/plugins.css" rel="stylesheet">
    <!--=== Helper CSS ===-->
    <link href="../assets_fontend/css/helper.min.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="../assets_fontend/css/style.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="../assets_fontend/js/vendor/modernizr-2.8.3.min.js"></script>

    
</head>

<body>

    <!--== End Header Section ==-->

    <!--== Start Page Breadcrumb ==-->
    <!--== End Page Breadcrumb ==-->

    <!--== Page Content Wrapper Start ==-->
    <div id="page-content-wrapper" style="padding: 0;">
        <div class="container">
            <div class="row">
                <!-- Single Product Page Content Start -->
                <div class="col-lg-12">
                    <div class="single-product-page-content">

                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Product Full Description Start -->
                                <div class="product-full-info-reviews">
                                    <!-- Single Product tab Menu -->
                                    <!-- Single Product tab Menu -->

                                    <!-- Single Product tab Content -->
                                    <div class="tab-content" id="nav-tabContent" style="padding: 0px;">

                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="product-ratting-wrap">
                                                    <div class="pro-avg-ratting">
                                                        <h4>4.5 <span>(Overall)</span></h4>
                                                    </div>
                                                    <div class="rattings-wrapper">

                                                        <?php
                                                        foreach ($dsbl as $key) {
                                                            extract($key);
                                                            if ($role_tk == 0) {
                                                                echo '
                                                            <div class="sin-rattings">
                                                            <div class="ratting-author" style=" margin-bottom: 30px;border-bottom: 1px solid;padding-bottom: 16px;">
                                                                <h3 style="padding-top:2px;">name : ' . $user_name . '</h3>
                                                                <p>' . $content_bl . '</p>
                                                                <i>' . $date_bl . '</i>
                                                            </div>
                                                            </div>
                                                            ';
                                                            } else {
                                                                echo '
                                                            <div class="sin-rattings">
                                                            <div class="ratting-author">
                                                                <h3> ' . $user_name . '</h3>
                                                                <p>' . $content_bl . '</p>
                                                                <i>' . $date_bl . '</i>
                                                            </div>
                                                            </div>
                                                            ';
                                                            }
                                                        }
                                                        ?>


                                                    </div>
                                                    <div class="ratting-form-wrapper">
                                                        <h3>Add your Comments</h3>
                                                        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                                                            <div class="ratting-form row">
                                                                <div class="col-12 mb-4">
                                                                    <label for="your-review">Your Review:</label>
                                                                    <textarea name="text_bl" id="your-review" placeholder="Write a review"></textarea>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="hidden" name="idpro" value="<?= $idpro ?>">
                                                                    <input name="submit_bl" value="add review" type="submit">
                                                                </div>
                                                            </div>
                                                        </form>
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

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="../assets_fontend/js/vendor/jquery.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="../assets_fontend/js/vendor/jquery-migrate-1.4.1.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="../assets_fontend/js/vendor/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="../assets_fontend/js/vendor/bootstrap.min.js"></script>
    <!--=== Ajax Mail Js ===-->
    <script src="../assets_fontend/js/ajax-mail.js"></script>
    <!--=== Plugins Min Js ===-->
    <script src="../assets_fontend/js/plugins.js"></script>

    <!--=== Active Js ===-->
    <script src="../assets_fontend/js/active.js"></script>
</body>

<!-- Mirrored from htmldemo.net/tienda/tienda/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 15:28:58 GMT -->

</html>
<?php
if (isset($_POST['submit_bl']) && ($_POST['submit_bl'])) {
    $content_bl = $_POST['text_bl'];
    $id_user = $_SESSION['user']['id_tk'];
    $name_user = $_SESSION['user']['name_tk'];
    $role_tk = $_SESSION['user']['role'];
    $id_pro =  $_POST['idpro'];
    $date_bl = date('h:i:sa d/m/Y');
    insert_binhluan($content_bl, $id_user, $id_pro, $date_bl, $name_user, $role_tk);
    $yourURL = "http://localhost/DuAnLapTop/index.php?act=sanphamct&id_sp=" . $id_pro;
    echo ("<script>location.href='$yourURL'</script>");
    // header('location: index.php?act=sanphamct');
}
?>