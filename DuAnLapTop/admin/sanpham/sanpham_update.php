<?php 
     if (is_array($sanpham)) {
        extract($sanpham);
     }
     $hinhpath = "../upload/".$img_sp;
     if (is_file($hinhpath)) {
         $img_sp = "<img src='" . $hinhpath . "' height='130px' width='120px'>";
     }else{
         $img_sp = "no Img";
     }
?>

<div class="container-fluid">
        <div class="khung_list_title" style="width: 100%;height: 50px;">
            <h1>Cập nhật sản phẩm</h1>
        </div>
        <div class="show_update">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="danhmuc_sp" >
            <label for="">
                Danh mục : 
                <br>
                <select name="id_danhmuc">
                                    <?php 
                                         foreach ($listDM as $key) {
                                            extract($key);
                                            if ($id_danhmuc == $id_sp) $s = "selected"; else $s ="";
                                            echo '<option value="'.$id_danhmuc.'" '.$s.'>'.$name_danhmuc.'</option>';
                                         }
                                    ?>
                        </select>
            </label>
            </div>
           <div class="Nhap_ten_sp">
            <label for="" >
                Tên sản phẩm :
            </label>
            <br>
            <input type="text" class="import" name="name_sp" value="<?php echo $name_sp ?>">
           </div>
           <div class="Nhap_gia_sp">
           <label for="" >
                Giá sản phẩm :
            </label>
            <br>
            <input type="text" class="import" name="price_sp" value="<?php echo $price_sp ?>">
           </div>
           <div class="Nhap_anh_sp">
           <label for="" >
                Ảnh sản phẩm :
            </label>
            <br>
            <input type="file" class="import" name="img_sp">
            <?php 
            echo $img_sp;
            ?>
           </div>
           <div class="Nhap_mota_sp" style="margin-top: 120px;">
            <label for="">
                Mô tả sản phẩm : 
                <br>
                <textarea name="mota_sp" id="" cols="165" rows="10">
                    <?php 
                         echo $mota_sp;
                    ?>
                </textarea>
            </label>
           </div>
            <div class="chucnang">
            <input type="hidden" name="id_sp" value="<?=$id_sp?>">
            <input type="submit" name="capnhat" id="" value="Cập nhật" style="background-color: #7460ee; border-color:#7460ee; color: white; border-radius: 2px; width: 85px; height: 35px; cursor: pointer;" >
                <a href="index.php?act=listsp" style="padding-left: 10px;" >
                    <input type="button" id="" value="Danh sách" style="color: #fff;background-color: #6c757d;border-color: #6c757d; border-radius: 2px; width: 85px; height: 35px; cursor: pointer;">
                </a>
            </div>
            <?php 
            if (isset($thongbao) && $thongbao != "") {
                echo $thongbao;
            }
            ?>
        </form>
        </div>
</div>