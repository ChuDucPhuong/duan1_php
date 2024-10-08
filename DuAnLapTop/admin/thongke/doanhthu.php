<div class="container-fluid">
        <div class="khung_list_title" style="width: 100%;height: 50px;">
            <h1>Thống kê doanh thu</h1>
        </div>
        <div class="khung_list_sp" style="width: 100%;height: 3000px;">
            <div class="xuatsp" style="width: 100%; height: 800px;">
            <table style="width: 100%; height: 30%; text-align: center;">
                        <tr style="border-bottom: 1px solid #B2B2B2; background-color: #ced3d894;">
                            <th>Tên</th>
                            <th>Mail</th>
                            <th >Địa chỉ</th>
                            <th style="color: white; font-size: 1.3rem; font-weight: 800;">số tiền</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php 
                            $tongtien = 0;
                            foreach ($list_tk_tien_thang as $key) {
                                extract($key);
                                $tongtien += $key['tongtien_bill'];
                                if ($key['status_bill'] == 3) {
                                    echo '
                                <tr style="border-bottom: 1px solid #B2B2B2;">
                                <td> ' . $key['name_bill'] .'</td>
                                <td> ' . $key['email_bill'] .'</td>
                                <td> ' . $key['address_bill'] .'</td>
                                <td>' . number_format($key['tongtien_bill']) .'</td>
                                </tr>
                                ';
                                }else{
                                    echo '
                                    <tr style="border-bottom: 1px solid #B2B2B2;">
                                    <td></td>
    
                                    <td></td>
                                    <td></td>
                                     </tr>
                                    ';
                                }
                            }
                            echo '
                                    <tr style="border-bottom: 1px solid #B2B2B2; background-color: #FF7D7D;">
                                    <td></td>
                                    <td style="color: white; font-size: 1rem; font-weight: 800;">Tổng tiền hóa đơn</td>
                                    <td></td>
                                    <td style="color: white; font-size: 1rem; font-weight: 800;">'. number_format($tongtien).'</td>
                                    </tr>
                            ';
                        ?>
                        
                    </table>
                    <div>
            </div>
            </div>
        </div>
</div>
<script>
        function confirmDesactiv()
{
   if(confirm("Bạn chắc chắn muốn xóa chứ ?"))
     return true;
  
  return false;
}
</script>