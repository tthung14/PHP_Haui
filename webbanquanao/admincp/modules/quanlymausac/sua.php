<?php
$sql_sua_mausac = "SELECT * FROM tbl_mausac WHERE id_mausac ='$_GET[id_mausac]' LIMIT 1";
$result_sua_mausac = mysqli_query($connect, $sql_sua_mausac);
?>
<p>Sửa màu sắc sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlymausac/xuly.php?id_mausac=<?= $_GET['id_mausac'] ?>">
        <?php
        while ($row = mysqli_fetch_array($result_sua_mausac)) {
        ?>
            <tr>
                <th colspan="2">Điền thông tin màu sắc sản phẩm</th>
            </tr>

            <tr>
                <td>Tên sản phẩm</td>
                <td>
                    <select name="sanpham">
                        <?php
                        $sql_sanpham = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
                        $query_sanpham = mysqli_query($connect, $sql_sanpham);
                        while ($row_sanpham = mysqli_fetch_array($query_sanpham)) {
                            if ($row_sanpham['id_sanpham'] == $row['id_sanpham']) {
                        ?>
                                <option value="<?= $row_sanpham['id_sanpham'] ?>" selected><?= $row_sanpham['tensanpham'] ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?= $row_sanpham['id_sanpham'] ?>"><?= $row_sanpham['tensanpham'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Màu sắc</td>
                <td> <input name="mausac"><?= $row['loaimau'] ?> </td>
            </tr>

            <tr>
                <td>Hình ảnh</td>
                <td><input type="file" name="hinhanh">
                    <img src="modules/quanlymausac/uploads/<?= $row['hinhanh'] ?> " width="150px">
                </td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" value="Sửa sản phẩm" name="sua"></td>
            </tr>
    </form>
<?php
        }
?>
</table>