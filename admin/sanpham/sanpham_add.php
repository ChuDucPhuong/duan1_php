<div class="container-fluid">
    <div class="khung_add">
        <h1>Thêm mới sản phẩm</h1>
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
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="danhmuc_sp">
                <label for="">
                    Danh mục : 
                    <br>
                    <select name="id_danhmuc" id="" style="margin-left: 80px;">
                        <?php 
                        foreach ($listDM as $key) {
                            extract($key);
                            echo '<option value="'. $id_danhmuc .'">'. $name_danhmuc .'</option>';
                        }
                        ?>
                    </select>
                </label>
                <small class="text-danger mb-5"><?php  if(isset($errorID)){ echo $errorID;} ?></small>
            </div>
            <div class="Nhap_ten_sp">
                <label for="" class="mt-3"  >
                    Tên sản phẩm :
                </label>
                <br>
                <input type="text" class="import" name="name_sp" value="<?php echo isset($_POST['name_sp']) ? htmlspecialchars($_POST['name_sp']) : ''; ?>">
                <small class="text-danger mb-5"><?php  if(isset($errorName)){ echo $errorName;} ?></small>
            </div>
            <div class="Nhap_gia_sp">
                <label for="" class="mt-3">
                    Giá sản phẩm :
                </label>
                <br>
                <input type="text" class="import" name="price_sp" value="<?php echo isset($_POST['price_sp']) ? htmlspecialchars($_POST['price_sp']) : ''; ?>">
                <small class="text-danger mb-5"><?php  if(isset($errorPrice)){ echo $errorPrice;} ?></small>
            </div>
            <div class="Nhap_anh_sp">
                <label for="" class="mt-3">
                    Ảnh sản phẩm :
                </label>
                <br>
                <input type="file" class="import" name="img_sp">
                <small class="text-danger mb-5"><?php  if(isset($errorImg)){ echo $errorImg;} ?></small>
            </div>
            <div class="Nhap_mota_sp" style="height: 50px !important;">
                <label for="" class="mt-3">
                    Mô tả sản phẩm : 
                    <br>
                    <textarea name="mota_sp" id="ykien"><?php echo isset($_POST['mota_sp']) ? htmlspecialchars($_POST['mota_sp']) : ''; ?></textarea>
                </label>
                <small class="text-danger mb-5"><?php  if(isset($errorDcr)){ echo $errorDcr;} ?></small>
            </div>
            <div class="chucnang" >
                <input type="submit" name="themmoi" id="" value="Thêm mới" style="margin-top: 100px; background-color: #7460ee; border-color:#7460ee; color: white; border-radius: 2px; width: 85px; height: 35px; cursor: pointer;">
                <a href="index.php?act=listsp" style="padding-left: 10px;">
                    <input type="button" id="" value="Danh sách" style="color: #fff;background-color: #6c757d;border-color: #6c757d; border-radius: 2px; width: 85px; height: 35px; cursor: pointer;">
                </a>
            </div>
        </form>
    </div>
</div>
<style>
    #ykien {
        width: 80vw;
        /* Full width of the viewport */
        height: 20vh;
        /* 80% of the viewport height */
        resize: both;
        /* Allow both horizontal and vertical resizing */
        box-sizing: border-box;
        /* Include padding and border in element's total width and height */
        padding: 10px;
        /* Add some padding for better text visibility */
        font-size: 16px;
        /* Increase font size for better readability */
        border: 1px solid #ccc;
        /* Light border */
        border-radius: 4px;
        /* Rounded corners */
        overflow: auto;
        /* Add scrollbars if the content overflows */
    }
</style>