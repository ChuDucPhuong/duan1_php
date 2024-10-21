<?php 

    function insert_danhmuc($tenloai)
    {
        $sql = "insert into danhmuc(name_danhmuc) values('$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id_danhmuc)
    {
        $sql = "delete from danhmuc where id_danhmuc = " .$id_danhmuc;
        pdo_query($sql);
    }
    function load_danh_all()
    {
        $sql = "select * from danhmuc order by id_danhmuc asc";
            $listDM = pdo_query($sql);
            return $listDM;
    }
    function load_one($id_danhmuc)
    {
        $sql = "select * from danhmuc where id_danhmuc=". $id_danhmuc;
            $dm = pdo_query_one($sql);  
            return $dm;
    }
    function update_dm($id_danhmuc , $tenloai)
    {
        $sql = "update danhmuc set name_danhmuc = '$tenloai' where id_danhmuc= '$id_danhmuc'";
        pdo_execute($sql);
    }
?>