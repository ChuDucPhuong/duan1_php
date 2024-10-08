<?php
include "../model/pdo.php";
include "../model/danh_muc.php";
include "../model/sanpham.php";
include "header.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                if ($_POST['tenloai'] == '') {
                    echo '
                        <script>
                        function thongbao(){
                         alert("Xin vui lòng nhập vào ô trống !");
                        }
                        thongbao();
                        </script>
                        ';
                } else {
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
            }
            include "danhmuc/danhmuc_add.php";
            break;
        case 'listdm':
            $xuatDM = load_danh_all();
            include "danhmuc/danhmuc_list.php";
            break;
        case 'suadm':
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                $sua_dm = load_one($_GET['id_danhmuc']);
            }
            include "danhmuc/danhmuc_update.php";
            break;
        case 'xoadm':
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'])) {
                delete_danhmuc($_GET['id_danhmuc']);
            }
            $sql = " select * from danhmuc order by id_danhmuc";
            $xuatDM = pdo_query($sql);
            include "danhmuc/danhmuc_list.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_danhmuc = $_POST['id'];
                $name_danhmuc = $_POST['ten'];
                update_dm($id_danhmuc, $name_danhmuc);
                $thongbao = "Cập nhật thành công";
            }
            $load_dm = load_danh_all();
            include "danhmuc/danhmuc_update.php";
            break;

            // controler Sản phẩm

        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $taget_div = "../upload/";
                $taget_file = $taget_div . basename($_FILES['img_sp']['name']);
                if ($_POST['name_sp'] == '' || $_POST['price_sp'] == '' || $_POST['id_danhmuc'] == '' || $taget_file == '' || $_POST['mota_sp'] == '') {
                    echo '
                        <script>
                        function thongbao(){
                         alert("Xin vui lòng nhập vào ô trống !");
                        }
                        thongbao();
                        </script>
                        ';
                } else {
                    $name_sp = $_POST['name_sp'];
                    $price_sp = $_POST['price_sp'];
                    $id_danhmuc = $_POST['id_danhmuc'];
                    $img_sp = $_FILES['img_sp']['name'];
                    $taget_div = "../upload/";
                    $taget_file = $taget_div . basename($_FILES['img_sp']['name']);
                    if (move_uploaded_file($_FILES['img_sp']['tmp_name'], $taget_file)) {
                        //echo "chill";
                    } else {
                        //echo "chill";
                    }
                    $mota_sp = $_POST['mota_sp'];
                    insert_sanpham($name_sp, $img_sp, $price_sp, $mota_sp, $id_danhmuc);
                    $thongbao = "
                    <script>
                    alert('Thêm sản phẩm thành công!');
                </script>
                    ";
                }
            }
            $listDM = load_danh_all();
            include "sanpham/sanpham_add.php";
            break;

        case 'listsp':
            if (isset($_POST['list_find']) && ($_POST['list_find'])) {
                if ($_POST['timkiem'] == "") {

                    $kyw = $_POST['timkiem'];
                    $id_danhmuc = $_POST['id_danhmuc'];
                } else {
                    $kyw = $_POST['timkiem'];
                    $id_danhmuc = $_POST['id_danhmuc'];
                }
            } else {
                $kyw = '';
                $id_danhmuc = 0;
            }
            $listsanpham = load_sanpham($kyw, $id_danhmuc);
            $listDM = load_danh_all();
            include "sanpham/sanpham_list.php";
            break;

        case 'xoasp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                delete_sanpham($_GET['id_sp']);
            }
            $listsanpham = load_sanpham("", 0);
            include "sanpham/sanpham_list.php";
            break;

        case 'suasp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                $sanpham = load_one_sanpham($_GET['id_sp']);
            }
            $listDM = load_danh_all();
            include "sanpham/sanpham_update.php";
            break;

        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_sp = $_POST['id_sp'];
                $id_danhmuc = $_POST['id_danhmuc'];
                $name_sp = $_POST['name_sp'];
                $price_sp = $_POST['price_sp'];
                $mota_sp = $_POST['mota_sp'];
                $img_sp = $_FILES['img_sp']['name'];
                $taget_div = "../upload/";
                $taget_file = $taget_div . basename($_FILES['img_sp']['name']);
                // var_dump($_POST);die;
                if (move_uploaded_file($_FILES['img_sp']['tmp_name'], $taget_file)) {
                } else {
                }
                update_sanpham($id_sp, $name_sp, $img_sp, $price_sp, $mota_sp, $id_danhmuc);
                $thongbao = "Cập nhật thành công";
            }
            //    var_dump('OOOOOOOOOOOOOOOO');die;
            $listDM = load_danh_all();
            $listsanpham = load_sanpham("", 0);
            include "sanpham/sanpham_list.php";
            break;

            // Tài khoản
        case 'listtk':
            $xuattk = load_all_taikhoan();
            include "taikhoan/list_tk.php";
            break;
        case 'sua_tk':
            if (isset($_GET['id_tk']) && ($_GET['id_tk'] > 0)) {
                $sua_tk = load_one_tk($_GET['id_tk']);
            }
            include "taikhoan/sua_tk.php";
            break;
        case 'updatetk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name_tk = $_POST['name_tk'];
                $pass_tk = $_POST['pass_tk'];
                $email_tk = $_POST['email_tk'];
                $address_tk = $_POST['address_tk'];
                $tel_tk = $_POST['tel_tk'];
                $id_tk = $_POST['id_tk'];
                update($id_tk, $name_tk, $pass_tk, $email_tk, $address_tk, $tel_tk);
                $thongbao = "Cập nhật thành công";
            }
            include "taikhoan/sua_tk.php";
        case 'xoa_tk':
            if (isset($_GET['id_tk']) && ($_GET['id_tk'])) {
                delete_taikhoan($_GET['id_tk']);
                $thongbao = "Xóa thành công";
            }
            $sql = " select * from taikhoan order by id_tk";
            $xuattk = pdo_query($sql);
            include "taikhoan/list_tk.php";
            break;
        case 'list_bl':
            $xuatBL = load_binhluan1_all(0);
            include "binhluan/list_bl.php";
            break;
        case 'xoabl':
            if (isset($_GET['id_bl']) && ($_GET['id_bl'])) {
                delete_bl($_GET['id_bl']);
            }
            $xuatBL = load_binhluan1_all(0);
            include "binhluan/list_bl.php";
            break;

        case 'don_hang':
            if (isset($_POST['kwn']) && ($_POST['kwn'] != "")) {
                $kwn = $_POST['kwn'];
            } else {
                $kwn = "";
            }
            $list_bill = load_all_bill1($kwn, 0);
            include 'bill/list_bill.php';
            break;
        case 'xoabill':
            if (isset($_GET['id_bill']) && ($_GET['id_bill'] > 0)) {
                delete_bill($_GET['id_bill']);
                delete_bill1($_GET['id_bill']);
            }
            if (isset($_POST['kwn']) && ($_POST['kwn'] != "")) {
                $kwn = $_POST['kwn'];
            } else {
                $kwn = "";
            }
            $list_bill = load_all_bill1($kwn, 0);
            include "bill/list_bill.php";
            break;
        case 'suabill':
            if (isset($_GET['id_bill']) && ($_GET['id_bill'])) {
                $bill = load_one_bill($_GET['id_bill']);
            }
            $xem_sp_cua_don_hang = lay_sp_theo_id_bill($_GET['id_bill']);
            include "bill/sua_bill.php";
            break;
        case 'update_bill':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_bill = $_POST['id_bill'];
                $status_hang = $_POST['status_bill'];
                update_bill($id_bill, $status_hang);
                $thongbao = "Cập nhật thành công";
            }
            if (isset($_POST['kwn']) && ($_POST['kwn'] != "")) {
                $kwn = $_POST['kwn'];
            } else {
                $kwn = "";
            }
            $list_bill = load_all_bill1($kwn, 0);
            include "bill/list_bill.php";
            break;
        case 'tk_sp':
            $list_tk = loadall_thongke();
            include "thongke/list_tk.php";
            break;

        case 'bieudo':
            $list_tk1 = loadall_thongke_bieudo();
            include "thongke/bieu_do.php";
            break;
        case 'doanhthu':
            $list_tk_tien_thang = loadall_thongke_tien_thang();
            include 'thongke/doanhthu.php';
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php"

?>