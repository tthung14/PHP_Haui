<?php
$sql_lietke = "SELECT * FROM tbl_loaisanpham ORDER BY id_loaisanpham DESC";
$result_lietke = mysqli_query($connect, $sql_lietke);
?>
<p>Liệt kê loại sản phẩm</p>
<table style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr>
        <td>ID</td>
        <td>Tên loại sản phẩm</td>
        <td>Mô tả</td>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result_lietke)) {
        $i++;
    ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row['tenloaisanpham'] ?></td>
            <td><?= $row['mota'] ?></td>
            <td>
                <a href="modules/quanlyloaisanpham/xuly.php?id_loaisanpham=<?= $row['id_loaisanpham'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>|
                <a href="?action=quanlyloaisanpham&query=sua&id_loaisanpham=<?= $row['id_loaisanpham'] ?>">Sửa</a>
            </td>
        </tr>

    <?php
    }
    ?>
</table>