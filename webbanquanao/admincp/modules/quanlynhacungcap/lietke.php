<?php
$sql_lietke = "SELECT * FROM tbl_nhacungcap ORDER BY id_nhacungcap DESC";
$result_lietke = mysqli_query($connect, $sql_lietke);
?>
<p>Liệt kê nhà cung cấp</p>
<table style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr>
        <td>ID</td>
        <td>Tên nhà cung cấp</td>
        <td>Địa chỉ</td>
        <td>Số điện thoại</td>
        <td></td>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result_lietke)) {
        $i++;
    ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row['tennhacungcap'] ?></td>
            <td><?= $row['diachi'] ?></td>
            <td><?= $row['sodienthoai'] ?></td>
            <td>
                <a href="modules/quanlynhacungcap/xuly.php?id_nhacungcap=<?= $row['id_nhacungcap'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>|
                <a href="?action=quanlynhacungcap&query=sua&id_nhacungcap=<?= $row['id_nhacungcap'] ?>">Sửa</a>
            </td>
        </tr>

    <?php
    }
    ?>
</table>