<?php
$sql_sua = "SELECT * FROM tbl_loaisanpham WHERE id_loaisanpham='$_GET[id_loaisanpham]' LIMIT 1";
$result_sua = mysqli_query($connect, $sql_sua);
?>
<p>Sửa loại sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlyloaisanpham/xuly.php?id_loaisanpham=<?= $_GET['id_loaisanpham'] ?>">
        <?php
        while ($dong = mysqli_fetch_array($result_sua)) {
        ?>
            <tr>
                <th colspan="2">Điền thông tin loại sản phẩm</th>
            </tr>
            <tr>
                <td>Tên loại sản phẩm</td>
                <td><input type="text" name="tenloaisanpham" value="<?= $dong['tenloaisanpham'] ?>"></td>
            </tr>
            <tr>
                <td>Mô tả</td>
                <td><input type="text" name="mota" value="<?= $dong['mota'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Sửa loại sản phẩm" name="sua"></td>
            </tr>
        <?php
        }
        ?>
    </form>
</table>