<div class="container-fluid">
    <div class="khung_add">
        <h1>Thêm mới danh mục</h1>
        <form action="index.php?act=adddm" method="post">
           <div class="Nhap_ten_dm">
            <label for="" >
                Tên danh mục :
            </label>
            <br>
            <input type="text" class="import" name="tenloai">
           </div>
                <input type="submit" name="themmoi" id="" value="Thêm mới" style="background-color: #7460ee; border-color:#7460ee; color: white; border-radius: 2px; width: 85px; height: 35px; cursor: pointer;">
                <a href="index.php?act=listdm" style="padding-left: 10px;">
                    <input type="button"  id="" value="Danh sách" style="color: #fff;background-color: #6c757d;border-color: #6c757d; border-radius: 2px; width: 85px; height: 35px; cursor: pointer;">
                </a>
                
        </form>
        <br>
        <br>
        <?php 
            if (isset($thongbao) && $thongbao != "") {
                echo $thongbao;
            }
        ?>
    </div>
</div>