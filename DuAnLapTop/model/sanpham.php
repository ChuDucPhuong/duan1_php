<?php 

    function insert_sanpham($name,$img,$price,$mota,$id_danhmuc)
    {
        $sql = "INSERT into sanpham(name_sp,img_sp,price_sp,mota_sp,id_danhmuc) values('$name','$img','$price','$mota','$id_danhmuc')";
        pdo_execute($sql);
    }
    function delete_sanpham($id)
    {
        $sql = "DELETE from sanpham where id_sp = ".$id;
        pdo_query($sql);
    }
    function lay_sp_theo_id_bill($id_bill){
        $sql = "select * from cart where id_bill=".$id_bill;
            $listsanpham= pdo_query($sql);
            return $listsanpham;
    }
    function load_sp_top6()
    {
        $sql = "select * from sanpham where 1 order by view desc limit 0,6";
            $listsanpham= pdo_query($sql);
            return $listsanpham;
    }
    function load_sp_home()
    {
        $sql = "select * from sanpham where 1 order by id_sp desc limit 0,7";
            $listsanpham= pdo_query($sql);
            return $listsanpham;
    }
    function load_sp_home1()
    {
        $sql = "select * from sanpham where 1 order by id_sp desc limit 0,12";
            $listsanpham= pdo_query($sql);
            return $listsanpham;
    }
    function load_sp_home2()
    {
        $sql = "select * from sanpham where 1 order by id_sp desc limit 4,7";
            $listsanpham= pdo_query($sql);
            return $listsanpham;
    }
    
    function load_sp_home3()
    {
        $sql = "select * from sanpham where 1 order by id_sp asc limit 0,3";
            $listsanpham= pdo_query($sql);
            return $listsanpham;
    }
    function load_sp_home4()
    {
        $sql = "select * from sanpham where 1 order by id_sp desc limit 8,11";
            $listsanpham= pdo_query($sql);
            return $listsanpham;
    }
    function load_sp_home5()
    {
        $sql = "select * from sanpham where 1 order by id_sp desc limit 6,9";
            $listsanpham= pdo_query($sql);
            return $listsanpham;
    }
    function load_sp_home6()
    {
        $sql = "select * from sanpham where 1 order by id_sp desc limit 7,10";
            $listsanpham= pdo_query($sql);
            return $listsanpham;
    }
    function load_sp_home7()
    {
        $sql = "select * from sanpham where 1 order by id_sp desc limit 9,12";
            $listsanpham= pdo_query($sql);
            return $listsanpham;
    }
    function load_sanpham($kyw = "", $id_danhmuc = 0)
    {
        $sql = "select * from sanpham where 1";
        if ($kyw!="") {
            $sql .= " and name_sp like '%".$kyw."%'";
        }
        if ($id_danhmuc > 0) {
            $sql .= " and id_danhmuc = '".$id_danhmuc."'"; 
        }
        $sql .= " order by id_sp desc";
        $listsanpham= pdo_query($sql);
        return $listsanpham;
    }
    function load_one_sanpham($id)
    {
        if ($id >0) {
            $sql = "SELECT * from sanpham where id_sp =". $id;
            $sp = pdo_query_one($sql); 
            return $sp;
        }else{
            return "";
        }
    }
    function load_ten_dm($id){
        if ($id > 0) {
        $sql = "select * from danhmuc where id_danhmuc = ".$id;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name_danhmuc;
        }else{
            return "";
        }
    }
    function sanpham_cungloai($id,$id_danhmuc)
    {
        $sql = "SELECT * from sanpham where id_danhmuc = ". $id_danhmuc ." AND id_sp <>". $id;
        $listsanpham= pdo_query($sql);
        return $listsanpham;
    }
    function update_sanpham($id, $name, $img, $price,$mota, $id_danhmuc)
    {
        if ($img !="") {
            $sql = "UPDATE sanpham set id_danhmuc = '". $id_danhmuc ."', name_sp = '".$name."', img_sp = '".$img."', price_sp ='".$price."', mota_sp = '".$mota."' where id_sp=".$id;
        //    echo $sql;die;
            pdo_execute($sql);
        }else{

            $sql = "UPDATE sanpham set id_danhmuc = '". $id_danhmuc ."', name_sp = '".$name."', price_sp = '".$price."' , mota_sp = '".$mota."' where id_sp=".$id;
            // echo $sql;die;
            pdo_execute($sql);
        }
    }

?>