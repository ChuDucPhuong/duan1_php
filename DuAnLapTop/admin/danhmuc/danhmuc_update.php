<!-- <?php 
 if (is_array($sua_dm)) {
    extract($sua_dm);
 }
?> -->

<div class="container-fluid">
        <h1>Cập nhật DANH MUC</h1>
        <div class="form_sua">
            <form action="index.php?act=updatedm" method="post">
                <div class="name_dm">
                    <label for="">
                        Tên danh mục : 
                        <br>
                        <input type="text" name="ten" value="<?php echo $name_danhmuc ?>">
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
                <?php 
                    if (isset($thongbao) && $thongbao != "") {
                        echo $thongbao;
                    }
                ?>
            </form>
        </div>

</div>