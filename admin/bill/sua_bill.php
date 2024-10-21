<?php 
     if (is_array($bill)) {
        extract($bill);
     }
?>

<div class="container-fluid">
        <div class="khung_list_title" style="width: 100%;height: 50px;">
            <h1>UPDATE DON HANG</h1>
        </div>
        <div class="show_update">
        <form action="index.php?act=update_bill" method="post" enctype="multipart/form-data">
 
        <div class="Nhap_ten_sp">
    <label for="">Tình trạng đơn hàng :</label>
    <br>
    <select name="status_bill" id="" style="margin-left: 80px;" <?= ($status_bill == 4) ? 'disabled' : ''; ?>>
        <option value="0" <?= ($status_bill == 0) ? 'selected' : ''; ?>>Đơn hàng mới</option>
        <option value="1" <?= ($status_bill == 1) ? 'selected' : ''; ?>>Đang xử lý</option>
        <option value="2" <?= ($status_bill == 2) ? 'selected' : ''; ?>>Đang giao hàng</option>
        <option value="3" <?= ($status_bill == 3) ? 'selected' : ''; ?>>Giao thành công</option>
        <option value="4" <?= ($status_bill == 4) ? 'selected' : ''; ?>>Hủy đơn hàng</option>
    </select>
</div>

<div class="chucnang">
    <input type="hidden" name="id_bill" value="<?=$id_bill?>">
    
    <?php if ($status_bill != 4): ?>
        <!-- Nút Cập nhật nếu đơn hàng chưa bị hủy -->
        <input type="submit" name="capnhat" id="" value="Cập nhật" style="color: #fff;background-color: #28b779;border-color: #28b779; border-radius: 2px; width: 80px; height: 35px; cursor: pointer;">
    <?php else: ?>
        <!-- Hiển thị thông báo nếu đơn hàng đã bị hủy -->
        <p style="color: red; font-weight: bold;">Đơn hàng đã hủy. Không thể cập nhật.</p>
    <?php endif; ?>
    
    <a href="index.php?act=don_hang" style="padding-left: 10px;">
        <input type="button" id="" value="Danh sách" style="color: #fff;background-color: #da542e;border-color: #da542e; border-radius: 2px; width: 80px; height: 35px; cursor: pointer;">
    </a>
</div>
            <div class="xuatsp" style="width: 100%; height: 800px;">
            <table  style="width: 100%; height: 50%; text-align: center;">
                        <tr style="border-bottom: 1px solid #B2B2B2; background-color: #ced3d894;">
                            <th></th>
                            <th>MÃ ĐƠN HÀNG</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>GIÁ SẢN PHẨM</th>
                            <th>SỐ LƯỢNG</th>
                        </tr>
                        <?php 
                            foreach ($xem_sp_cua_don_hang as $key) {
                                extract($key);
                                echo '
                                <tr style="border-bottom: 1px solid #B2B2B2;">
                                <td><input type="checkbox" name="" id=""></td>
                                <td> ' . $key["id_cart"].'</td>
                                <td>' . $key["name"] .'</td>
                                <td>' . $key["price"] .'</td>
                                <td>' . $key["soluong"] .'</td>                                
                                
                            </tr>
                                ';
                            }
                        ?>
                        
                    </table>
            </div>
            <?php 
            if (isset($thongbao) && $thongbao != "") {
                echo $thongbao;
            }
            
            ?>
        </form>
        </div>
</div>