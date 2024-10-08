<div class="container-fluid">
    <div class="import_more">
        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
    </div>
        <div class="khung_list_title" style="width: 100%;height: 50px;">
            <h1>Danh sách sản phẩm</h1>
        </div>
        <div class="khung_list_sp" style="width: 100%;height: 6500px;">
            <div class="find_sp" style="width: 100%; height: 40px;">
                    <form action="index.php?act=listsp" method="post">
                                <input type="text" name="timkiem" class="find_product">
                                <select name="id_danhmuc" id="" class="option">
                                    <option value="0" selected>Tất cả</option >
                                            <?php 
                                                 foreach ($listDM as $key) {
                                                    extract($key);
                                                    echo '<option value="'.$id_danhmuc.'">'.$name_danhmuc.'</option>';
                                                 }
                                            ?>
                                </select>
                                    <input type="submit" name="list_find" value="FIND">
                    </form>
            </div>

            <div class="xuatsp" style="width: 100%; height: 800px;">
            <table border="1px" style="width: 100%; height: 40%; text-align: center;">
                        <tr >
                            <th>MÃ SẢN PHẨM</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>ẢNH SẢN PHẨM</th>
                            <th>GIÁ SẢN PHẨM</th>
                            <th>MÔ TẢ</th>
                            <th>SỰ KIỆN</th>
                        </tr>
                        <?php 
                            foreach ($listsanpham as $key) {
                                extract($key);
                                $suasp = "index.php?act=suasp&id_sp=".$id_sp;
                                $xoasp = "index.php?act=xoasp&id_sp=".$id_sp;
                                $hinhpath = "../upload/".$img_sp;
                                if (is_file($hinhpath)) {
                                    $hinh = "<img src='" . $hinhpath . "' height='80px' >";
                                }else{
                                    $hinh = "no Img";
                                }
                                echo '
                                <tr>
                                <td> ' . $id_sp.'</td>
                                <td>' . $name_sp .'</td>
                                <td>'.$hinh.'

                                <td>' . $price_sp .'</td>
                                <td>' . $mota_sp .'</td>
                                <td><a href="'.$suasp.'">
                                <input type="button" value="Sửa" class="check"></a> 
                                <a href="'.$xoasp.'">
                                <input type="button" value="Xóa" class="check" ></a></td>
                            </tr>
                                ';
                            }
                        ?>
                        
                    </table>
            </div>
        </div>
</div>