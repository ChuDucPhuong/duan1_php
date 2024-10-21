
<?php


function checkLoginMiddleware() {
    // Kiểm tra xem biến session 'user_id' đã được thiết lập chưa
    if (!isset($_SESSION['user'])) {
        // Chưa đăng nhập, chuyển hướng đến trang đăng nhập
        header('Location: ../index.php?act=login');
        $_SESSION['message'] = "Bạn cần đăng nhập trước!";
        $_SESSION['msg_type'] = "danger";
        exit(); // Dừng thực thi script
    }
    else{
        extract($_SESSION['user']);
                     
        if ($role != 1) {
        
            $_SESSION['message'] = "Bạn không đủ quyền!";
            $_SESSION['msg_type'] = "success";
            header("Location: ../index.php"); // Chuyển hướng đến trang chính cho người dùng thường
           
        }
    }
}

// Kiểm tra xem người dùng có truy cập vào /admin hay không

    checkLoginMiddleware();


// Nội dung khác của trang hoặc logic ứng dụng

?>


