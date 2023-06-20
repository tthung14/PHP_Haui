 <p>Thêm sản phẩm</p>
 <table border="1" width="50%" style="border-collapse: collapse;">
     <form method="POST" action="modules/quanlysanpham/xuly.php" enctype="multipart/form-data">
         <tr>
             <th colspan="2">Điền thông tin sản phẩm</th>
         </tr>
         <tr>
             <td>Tên sản phẩm</td>
             <td><input type="text" name="tensanpham"></td>
         </tr>
         <tr>
             <td>Mã sản phẩm</td>
             <td><input type="text" name="masanpham"></td>
         </tr>
         <tr>
             <td>Giá</td>
             <td><input type="number" name="giasanpham"></td>
         </tr>
         <tr>
             <td>Số lượng</td>
             <td><input type="text" name="soluong"></td>
         </tr>
         <tr>
             <td>Hình ảnh</td>
             <td><input type="file" name="hinhanh"></td>
         </tr>
         <tr>
             <td>Tóm tắt</td>
             <td> <textarea name="tomtat" rows="5" cols="50" style="resize: none;"></textarea> </td>
         </tr>
         <tr>
             <td>Nội dung</td>
             <td> <textarea name="noidung" rows="5" cols="50" style="resize: none;"></textarea> </td>
         </tr>
         <tr>
             <td>Loại sản phẩm</td>
             <td>
                 <select name="loaisanpham">
                     <?php
                        $sql_loaisanpham = "SELECT * FROM tbl_loaisanpham ORDER BY id_loaisanpham DESC";
                        $query_loaisanpham = mysqli_query($connect, $sql_loaisanpham);
                        while ($row_loaisanpham = mysqli_fetch_array($query_loaisanpham)) {
                        ?>
                         <option value="<?= $row_loaisanpham['id_loaisanpham'] ?>"><?= $row_loaisanpham['tenloaisanpham'] ?></option>
                     <?php
                        }
                        ?>
                 </select>
             </td>
         </tr>
         <tr>
             <td>Nhà cung cấp</td>
             <td>
                 <select name="nhacungcap">
                     <?php
                        $sql_nhacungcap = "SELECT * FROM tbl_nhacungcap ORDER BY id_nhacungcap DESC";
                        $query_nhacungcap = mysqli_query($connect, $sql_nhacungcap);
                        while ($row_nhacungcap = mysqli_fetch_array($query_nhacungcap)) {
                        ?>
                         <option value="<?= $row_nhacungcap['id_nhacungcap'] ?>"><?= $row_nhacungcap['tennhacungcap'] ?></option>
                     <?php
                        }
                        ?>
                 </select>
             </td>
         </tr>
         <tr>
             <td>Tình trạng </td>
             <td>
                 <select name="hienthi">
                     <option value="1">Mới</option>
                     <option value="0">Cũ</option>
                 </select>
             </td>
         </tr>
         <tr>
             <td colspan="2"><input type="submit" value="Thêm sản phẩm" name="them"></td>
         </tr>
     </form>
 </table>