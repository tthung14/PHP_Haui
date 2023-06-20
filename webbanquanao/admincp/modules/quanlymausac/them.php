<p>Thêm màu sắc sản phẩm</p>
 <table border="1" width="50%" style="border-collapse: collapse;">
     <form method="POST" action="modules/quanlymausac/xuly.php" enctype="multipart/form-data">
         <tr>
             <th colspan="2">Điền màu sắc sản phẩm</th>
         </tr>

         <tr>
             <td>Chọn tên sản phẩm</td>
             <td>
                 <select name="sanpham">
                     <?php
                        $sql_sanpham = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
                        $query_sanpham = mysqli_query($connect, $sql_sanpham);
                        while ($row_sanpham = mysqli_fetch_array($query_sanpham)) {
                        ?>
                         <option value="<?= $row_sanpham['id_sanpham'] ?>"><?= $row_sanpham['tensanpham'] ?></option>
                     <?php
                        }
                        ?>
                 </select>
             </td>
         </tr>

         <tr>
             <td>Màu sắc</td>
             <td><input type="text" name="mausac"></td>
         </tr>
         <tr>
             <td>Hình ảnh</td>
             <td><input type="file" name="hinhanh"></td>
         </tr>
         <tr>
             <td colspan="2"><input type="submit" value="Thêm màu sắc" name="them"></td>
         </tr>
     </form>
 </table>