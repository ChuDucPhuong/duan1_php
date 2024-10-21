<?php

function delete_taikhoan($id_tk)
{
    $sql = "delete from taikhoan where id_tk = " .$id_tk;
    pdo_query($sql);
} 
function update_tk($id_tk , $name_tk, $pass_tk,$email_tk,$address_tk,$tel_tk)
{
    $sql = "update taikhoan set name_tk = '$name_tk', pass_tk = '$pass_tk', email_tk = '$email_tk', address_tk = '$address_tk', tel_tk = '$tel_tk' where id_tk= '$id_tk'";
    pdo_execute($sql);
}
function load_one_tk($id_tk)
{
    $sql = "select * from taikhoan where id_tk=". $id_tk;
        $dm = pdo_query_one($sql);  
        return $dm;
}
 function load_all_taikhoan()
 {
     $sql = "select * from taikhoan order by id_tk asc";
         $listDM = pdo_query($sql);
         return $listDM;
 }
  function insert_taikhoan($user,$pass,$email,$address,$tel)
  {
      $sql = "INSERT into taikhoan(name_tk,pass_tk,email_tk,address_tk,tel_tk) values('$user','$pass','$email','$address','$tel')";
      pdo_execute($sql);
  }
  function checklogin($name_tk,$pass_tk)
  {
      $sql = "select * from taikhoan where name_tk = '" .$name_tk. "' AND pass_tk = '" .$pass_tk. "'";
          $dm = pdo_query_one($sql);  
          return $dm;
  }
  function update($id_tk, $name_tk, $pass_tk, $email_tk, $address_tk,$tel_tk)
    {
        $sql = "UPDATE taikhoan set name_tk = '". $name_tk ."', pass_tk = '".$pass_tk."', email_tk = '".$email_tk."' , address_tk = '".$address_tk."', tel_tk ='".$tel_tk."' where id_tk=".$id_tk;
        pdo_execute($sql);
    }
  
?>
