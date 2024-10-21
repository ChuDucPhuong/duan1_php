<div class="container-fluid">
<?php if (isset($_SESSION['message'])): ?>
            <div id="alert-message" class="alert alert-<?php echo $_SESSION['msg_type']; ?> alert-dismissible fade show custom-alert" role="alert">
                <?php 
                    // Hiển thị thông báo
                    echo $_SESSION['message']; 
                    
                    // Xóa thông báo sau khi hiển thị
                    unset($_SESSION['message']);
                    unset($_SESSION['msg_type']);
                ?>
                <!-- Nút X để đóng thông báo -->
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
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
                     foreach ($xuatDM as $key) :
                        extract($key);
                       
                        $suadm = "index.php?act=suadm&id_danhmuc=".$id_danhmuc;
                        $xoadm = "index.php?act=xoadm&id_danhmuc=".$id_danhmuc;
                        ?>
                        
                        <tr style="border-bottom: 1px solid #B2B2B2;">
                        <td><?=$id_danhmuc?></td>
                        <td><?=$name_danhmuc?></td>
                        <td>
                        <a href="<?=$suadm?>">
                        <input type="button" value="Sửa" style="color: #fff;background-color: #28b779;border-color: #28b779; border-radius: 2px; width: 60px; height: 35px; cursor: pointer;" >
                        </a>
                        <a href="<?=$xoadm?>" onclick="return confirm('Bạn có muốn xóa ')">
                        <input type="button" value="Xóa" style="color: #fff;background-color: #da542e;border-color: #da542e; border-radius: 2px; width: 60px; height: 35px; cursor: pointer;">
                        </a>
                        <td>
                        </tr>
                    <?php 
                    endforeach
                    ?>
                     
              
            </table>
        </div>
</div>