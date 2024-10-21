<?php 
    function update_bill($id_bill , $status_bill)
    {
        $sql = "update bill set status_bill = '$status_bill' where id_bill =".$id_bill;
        pdo_execute($sql);
    }
    function tong_donhang()
    {
        $tong = 0;
        foreach ($_SESSION['mua_cart'] as $cart) {
            $ttien = $cart[3] * $cart[4];
            $tong += $ttien;
        }
        return $tong;
    }
    function insert_bill($id_user,$name_bill,$email_bill,$address_bill,$tel_bill,$ordernote_bill,$tongtien_bill,$pttt_bill,$ngaydathang)
    {
       
        $sql = "insert into bill(iduser,name_bill,email_bill,address_bill,tel_bill,ordernote_bill,tongtien_bill,pttt_bill,ngaydathang) values('$id_user','$name_bill','$email_bill','$address_bill','$tel_bill','$ordernote_bill' ,'$tongtien_bill' ,'$pttt_bill','$ngaydathang')";
       
        return pdo_execute_return_id_bill($sql);
        
    }
    function insert_cart($id_user,$idpro,$img,$name,$price,$soluong,$id_bill)
    {
        $sql = "insert into cart(id_user,idpro,img,name,price,soluong,id_bill) values('$id_user','$idpro','$img','$name','$price' ,'$soluong','$id_bill')";
       
        return pdo_execute($sql);
    }
    function load_one_bill($id_bill)
    {
        $sql = "select * from bill where id_bill=". $id_bill;
            $dm = pdo_query_one($sql);  
            return $dm;
    }
    function load_all_cart($id_bill)
    {
        $sql = "select * from cart where id_bill=". $id_bill;
            $dm = pdo_query($sql);  
            return $dm;
    }
    function dem_sl_mat_hang($id_bill)
    {
        $sql = "select * from cart where id_bill=". $id_bill;
            $dm = pdo_query($sql);  
            return sizeof($dm);
    }
    function load_all_bill($id_user)
    {
        $sql = "select * from bill where 1";
        if ($id_user > 0) {
            $sql .=" AND iduser=". $id_user;
        }
        $sql .=" order by id_bill";
            $list_bill = pdo_query($sql);  
            return $list_bill;
    }
    function load_all_bill1($kwn = "",$id_user = 0)
    {
        $sql = "select * from bill where 1";
        if ($id_user > 0) {
            $sql .=" AND iduser=". $id_user;
        }
        if ($kwn != "") {
            $sql .=" AND id_bill like '%". $kwn."%'";
        }
        $sql .=" order by id_bill desc";
            $list_bill = pdo_query($sql);  
            return $list_bill;
    }
    function delete_bill($id)
    {
        $sql = "DELETE from cart where id_bill = ".$id;
        pdo_query($sql);
    }
    function delete_bill1($id)
    {
        $sql = "DELETE from bill where id_bill = ".$id;
        pdo_query($sql);
    }
    function get_ttdh($trangthai){
        switch ($trangthai) {
            case '0':
                $tt = "Đơn hàng mới&chưa thanh toán";
                break;
            case '1':
                $tt = "Đang sử lý&chưa thanh toán";
                break;
            case '2':
                $tt = "Đang giao hàng&chưa thanh toán";
                break;
            case '3':
                $tt = "Giao thành công&đã thanh toán";
                break;
            default:
                $tt = "Đơn hàng mới";
                break;
        }
        return $tt;
    }
    function loadall_thongke()
    {
        $sql = "select danhmuc.id_danhmuc as ma_dm, danhmuc.name_danhmuc as ten_dm, count(sanpham.id_sp) as count_sp,min(sanpham.price_sp) as min_price,
         max(sanpham.price_sp) as max_price,avg(sanpham.price_sp) as avg_price from sanpham left join danhmuc on danhmuc.id_danhmuc = sanpham.id_danhmuc";
        $sql .=" group by danhmuc.id_danhmuc order by danhmuc.id_danhmuc desc";
            $list_tk = pdo_query($sql);  
            return $list_tk;
    }
    function loadall_thongke_bieudo()
    {
        $sql = "select cart.id_cart as ma_cart,cart.idpro as ma_pro, count(cart.idpro) as count_pro, sanpham.name_sp as sp_name from cart left join sanpham on cart.idpro = sanpham.id_sp";
        $sql .=" group by cart.idpro order by sanpham.id_sp desc";
            $list_tk = pdo_query($sql);  
            return $list_tk;
    }
    function loadall_thongke_tien_thang()
    {
        $sql = "select * from bill";
        $list_tk = pdo_query($sql);  
        return $list_tk;
    }
?>