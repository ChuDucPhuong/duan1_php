<div class="container-fluid">
    <div class="import_more">
        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
    </div>
        <div class="khung_danhsach">
            <h1>Danh sách DANH MUC</h1>
            <table  style="width: 100%; height: 60%; text-align: center;">
                <tr style="border-bottom: 1px solid #B2B2B2; background-color: #ced3d894;">
                        <th>mã Loại</th>
                        <th>Tên Loại</th>
                        <th>Sự kiện</th>
                </tr>
                <?php 
                     foreach ($xuatDM as $key) {
                        extract($key);
                        $suadm = "index.php?act=suadm&id_danhmuc=".$id_danhmuc;
                        $xoadm = "index.php?act=xoadm&id_danhmuc=".$id_danhmuc;
                        echo '
                        <tr style="border-bottom: 1px solid #B2B2B2;">
                        <td>'. $id_danhmuc .'</td>
                        <td>' . $name_danhmuc . '</td>
                        <td>
                        <a href="'.$suadm.'">
                        <input type="button" value="Sửa" style="color: #fff;background-color: #28b779;border-color: #28b779; border-radius: 2px; width: 60px; height: 35px; cursor: pointer;" >
                        </a>
                        <a href="'.$xoadm.'">
                        <input type="button" value="Xóa" style="color: #fff;background-color: #da542e;border-color: #da542e; border-radius: 2px; width: 60px; height: 35px; cursor: pointer;">
                        </a>
                        <td>
                        </tr>
                        ';
                     }
                ?>
            </table>
        </div>
</div>