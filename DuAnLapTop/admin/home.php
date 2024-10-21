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

<h1>Chào mừng đến với trang quản trị</h1>
 
</div>