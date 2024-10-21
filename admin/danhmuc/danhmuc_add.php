<div class="container-fluid">
    <div class="khung_add">
        <h1>Thêm mới danh mục</h1>

        <!-- Hiển thị thông báo thành công hoặc lỗi -->
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

        <form action="index.php?act=adddm" method="post">
            <div class="Nhap_ten_dm">
                <label for="">
                    Tên danh mục:
                </label>
                <br>
                <input type="text" class="import" name="tenloai" placeholder="Nhập tên loại" value="<?php echo isset($_POST['tenloai']) ? htmlspecialchars($_POST['tenloai']) : ''; ?>">
                <small class="text-danger">
                    <?php if (isset($error)): ?>
                        <?php echo $error; ?>
                    <?php endif; ?>
                </small>
            </div>

            <input type="submit" name="themmoi" id="" value="Thêm mới"
                style="background-color: #7460ee; border-color: #7460ee; color: white; border-radius: 2px; width: 85px; height: 35px; cursor: pointer;">

            <a href="index.php?act=listdm" style="padding-left: 10px;">
                <input type="button" id="" value="Danh sách"
                    style="color: #fff;background-color: #6c757d;border-color: #6c757d; border-radius: 2px; width: 85px; height: 35px; cursor: pointer;">
            </a>
        </form>
    </div>
</div>
