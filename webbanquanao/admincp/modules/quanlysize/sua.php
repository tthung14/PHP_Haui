<?php
$sql_sua_size = "SELECT * FROM tbl_size WHERE id_size='$_GET[id_size]' LIMIT 1";
$result_sua_size = mysqli_query($connect, $sql_sua_size);
?>
<p>Sửa kích thước sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlysize/xuly.php?id_size=<?= $_GET['id_size'] ?>">
        <?php
        while ($row = mysqli_fetch_array($result_sua_size)) {
        ?>
            <tr>
                <th colspan="2">Điền thông tin kích thước sản phẩm</th>
            </tr>

            <tr>
                <td>Mã sản phẩm</td>
                <td>
                    <select name="sanpham">
                        <?php
                        $sql_sanpham = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
                        $query_sanpham = mysqli_query($connect, $sql_sanpham);
                        while ($row_sanpham = mysqli_fetch_array($query_sanpham)) {
                            if ($row_sanpham['id_sanpham'] == $row['id_sanpham']) {
                        ?>
                                <option value="<?= $row_sanpham['id_sanpham'] ?>" selected><?= $row_sanpham['masanpham'] ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?= $row_sanpham['id_sanpham'] ?>"><?= $row_sanpham['masanpham'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Size</td>
                <td> <input name="size"><?= $row['loaisize'] ?> </td>
            </tr>


            <tr>
                <td colspan="2"><input type="submit" value="Sửa sản phẩm" name="sua"></td>
            </tr>
    </form>
<?php
        }
?>
</table>