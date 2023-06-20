<?php
$sql_sua = "SELECT * FROM tbl_nhacungcap WHERE id_nhacungcap='$_GET[id_nhacungcap]' LIMIT 1";
$result_sua = mysqli_query($connect, $sql_sua);
?>
<p>Sửa nhà cung cấp</p>
<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlynhacungcap/xuly.php?id_nhacungcap=<?= $_GET['id_nhacungcap'] ?>">
        <?php
        while ($dong = mysqli_fetch_array($result_sua)) {
        ?>
            <tr>
                <th colspan="2">Điền thông tin nhà cung cấp</th>
            </tr>
            <tr>
                <td>Tên nhà cung cấp</td>
                <td><input type="text" name="tennhacungcap" value="<?= $dong['tennhacungcap'] ?>"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="diachi" value="<?= $dong['diachi'] ?>"></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input type="text" name="sodienthoai" value="<?= $dong['sodienthoai'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Sửa nhà cung cấp" name="sua"></td>
            </tr>
        <?php
        }
        ?>
    </form>
</table>