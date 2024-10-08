<div class="container-fluid">
    <div class="khung_add" style="height: 2550px;">
        <h1>Thêm mới sản phẩm</h1>
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="danhmuc_sp" >
            <label for="">
                Danh mục : 
                <br>
                <select name="id_danhmuc" id="" style="margin-left: 80px;">
                <?php 
                     foreach ($listDM as $key) {
                        extract($key);
                        echo '
                        <option value="'. $id_danhmuc .'">'. $name_danhmuc .'</option>
                        ';
                     }
                ?>
                </select>
            </label>
            </div>
           <div class="Nhap_ten_sp">
            <label for="" >
                Tên sản phẩm :
            </label>
            <br>
            <input type="text" class="import" name="name_sp">
           </div>
           <div class="Nhap_gia_sp">
           <label for="" >
                Giá sản phẩm :
            </label>
            <br>
            <input type="text" class="import" name="price_sp">
           </div>
           <div class="Nhap_anh_sp">
           <label for="" >
                Ảnh sản phẩm :
            </label>
            <br>
            <input type="file" class="import" name="img_sp">
           </div>
           <div class="Nhap_mota_sp" style="height: 50px !important;">
            <label for="">
                Mô tả sản phẩm : 
                <br>
                <textarea name="mota_sp" id="ykien"  cols="165" rows="30" ></textarea>
                <script src="ckeditor5-build-classic/ckeditor.js">
                 </script>
                 <script>
                     ClassicEditor
                     .create(document.querySelector('#ykien'))
                     .then( editor => {
                       editor.ui.view.editable.element.style.height = '800px';
                       editor.ui.view.editable.element.style.width = '2000px';
                       } )
                     .catch(error =>  {
                        console.error(error)
                     });
                 </script> 

            </label>
           </div>
            <div class="chucnang" style="margin-top: 750px;" > 
            <input type="submit" name="themmoi" id="" value="Thêm mới" style="margin-top: 100px; background-color: #7460ee; border-color:#7460ee; color: white; border-radius: 2px; width: 85px; height: 35px; cursor: pointer;" >
                <a href="index.php?act=listsp" style="padding-left: 10px;">
                    <input type="button" id="" value="Danh sách" style="color: #fff;background-color: #6c757d;border-color: #6c757d; border-radius: 2px; width: 85px; height: 35px; cursor: pointer;">
                </a>
            </div>
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