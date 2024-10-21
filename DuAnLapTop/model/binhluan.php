<?php 
    function insert_binhluan($content_bl,$id_user,$id_pro,$date_bl,$user_name,$role_tk)
    {
        $sql = "insert into binhluan(content_bl,id_user,id_pro,date_bl,user_name,role_tk) values('$content_bl','$id_user','$id_pro','$date_bl','$user_name','$role_tk')";
        pdo_execute($sql);
    }
      function load_bl_all($idpro)
    {
        $sql = "select * from binhluan where id_pro='".$idpro."' order by id_bl asc";
            $listDM = pdo_query($sql);
            return $listDM;
    }
    function load_binhluan1_all($idpro)
    {
        $sql = "select * from binhluan where 1";
        if ($idpro > 0) {
            $sql .=" AND id_pro='".$idpro."'";
        }else{
            $sql .= " order by id_bl asc";
        }
         
            $listDM = pdo_query($sql);
            return $listDM;
    }
    function delete_bl($id_bl)
    {
        $sql = "delete from binhluan where id_bl = " .$id_bl;
        pdo_query($sql);
    }
?>