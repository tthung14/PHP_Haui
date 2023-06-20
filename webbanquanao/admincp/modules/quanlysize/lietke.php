<?php
$sql_lietke_size = "SELECT * FROM tbl_sanpham ,tbl_size WHERE tbl_sanpham.id_sanpham=tbl_size.id_sanpham ORDER BY id_size DESC";
$result_lietke_size = mysqli_query($connect, $sql_lietke_size);
?>
<p>Liệt kê danh sách kích thước sản phẩm</p>
<table style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr>
        <td>ID</td>
        <td>Mã sản phẩm</td>
        <td>Loại size</td>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result_lietke_size)) {
        $i++;
    ?>
        <tr>
            <td><?= $i ?></td>
            <td style="width:80px;height:150px; text-align: center;">
                <?= $row['masanpham'] ?>
            </td>
            <td style="width:80px;height:150px; text-align: center;">
                <?= $row['loaisize'] ?>
            </td>
            <td>
                <a href="modules/quanlysize/xuly.php?id_size=<?= $row['id_size'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>|
                <a href="?action=quanlysize&query=sua&id_size=<?= $row['id_size'] ?>">Sửa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>