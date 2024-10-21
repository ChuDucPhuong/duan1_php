<!-- <?php 
 if (is_array($sua_dm)) {
    extract($sua_dm);
 }
?> -->

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
        <h1>Cập nhật DANH MUC</h1>
        <div class="form_sua">
            <form action="index.php?act=updatedm" method="post">
                <div class="name_dm">
                    <label for="">
                        Tên danh mục : 
                        <br>
                        <input type="text" name="ten" value="<?php if (isset($name_danhmuc)) {
                           echo $name_danhmuc ;
                        } ?>">
                        <small class="text-danger">
                    <?php if (isset($error)): ?>
                        <?php echo $error; ?>
                    <?php endif; ?>
                </small>
                    </label>
                </div>
                <div class="capnhat_dm">
                    <input type="hidden" name="id" value="<?php echo $id_danhmuc ?>">
                    <input type="submit" value="Cập nhật" name="capnhat">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listdm">
                        <input type="button" value="Danh mục">
                    </a>
                </div>
               
            </form>
        </div>

</div>