<p>Thêm kích cỡ sản phẩm</p>
 <table border="1" width="50%" style="border-collapse: collapse;">
     <form method="POST" action="modules/quanlysize/xuly.php" enctype="multipart/form-data">
         <tr>
             <th colspan="2">Điền kích thước sản phẩm</th>
         </tr>

         <tr>
             <td>Chọn mã sản phẩm</td>
             <td>
                 <select name="sanpham">
                     <?php
                        $sql_sanpham = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
                        $query_sanpham = mysqli_query($connect, $sql_sanpham);
                        while ($row_sanpham = mysqli_fetch_array($query_sanpham)) {
                        ?>
                         <option value="<?= $row_sanpham['id_sanpham'] ?>"><?= $row_sanpham['masanpham'] ?></option>
                     <?php
                        }
                        ?>
                 </select>
             </td>
         </tr>

         <tr>
             <td>Size</td>
             <td><input type="text" name="size"></td>
         </tr>



         <tr>
             <td colspan="2"><input type="submit" value="Thêm kích thước" name="them"></td>
         </tr>
     </form>
 </table>