<?php
$sql_lietke_mausac = "SELECT * FROM tbl_sanpham ,tbl_mausac WHERE tbl_sanpham.id_sanpham=tbl_mausac.id_sanpham ORDER BY id_mausac DESC";
$result_lietke_mausac = mysqli_query($connect, $sql_lietke_mausac);
?>
<p>Liệt kê danh sách màu sắc sản phẩm</p>
<table style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Màu sắc</td>
        <td>Hình ảnh</td>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result_lietke_mausac)) {
        $i++;
    ?>
        <tr>
            <td><?= $i ?></td>
            <td style="width:80px;height:150px; text-align: center;">
                <?= $row['tensanpham'] ?>
            </td>
            <td style="width:80px;height:150px; text-align: center;">
                <?= $row['loaimau'] ?>
            </td>
            <td style="width:150px;height:150px;">
                <img src="modules/quanlymausac/uploads/<?= $row['hinhanh'] ?> " width="100%">
            </td>
            <td>
                <a href="modules/quanlymausac/xuly.php?id_mausac=<?= $row['id_mausac'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>|
                <a href="?action=quanlymausac&query=sua&id_mausac=<?= $row['id_mausac'] ?>">Sửa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>