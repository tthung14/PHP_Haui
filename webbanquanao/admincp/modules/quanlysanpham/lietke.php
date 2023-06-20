<?php
$sql_lietke_sp = "SELECT * FROM (tbl_sanpham INNER JOIN tbl_loaisanpham ON tbl_sanpham.id_loaisanpham = tbl_loaisanpham.id_loaisanpham) INNER JOIN tbl_nhacungcap ON tbl_sanpham.id_nhacungcap = tbl_nhacungcap.id_nhacungcap ORDER BY id_sanpham DESC";
$result_lietke_sp = mysqli_query($connect, $sql_lietke_sp);
?>
<p>Liệt kê danh sách sản phẩm</p>
<table style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr>
        <td>ID</td>
        <td>Mã sản phẩm</td>
        <td>Tên sản phảm</td>
        <td>Hình ảnh </td>
        <td>Giá sản phẩm</td>
        <td>Số lượng</td>
        <td>Loại sản phẩm</td>
        <td>Nhà cung cấp</td>
        <td>Tóm tắt</td>
        <td>Nội dung</td>
        <td>Trạng thái</td>
        <td>Quản lý</td>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result_lietke_sp)) {
        $i++;
    ?>
        <tr>
            <td><?= $i ?></td>
            <td style="width:80px;height:150px; text-align: center;">
                <?= $row['masanpham'] ?>
            </td>
            <td style="width:80px;height:150px; text-align: center;">
                <?= $row['tensanpham'] ?>
            </td>
            <td style="width:150px;height:150px;">
                <img src="modules/quanlysanpham/uploads/<?= $row['hinhanh'] ?> " width="100%">
            </td>
            <td style="width:150px;text-align: center;">
                <?= number_format($row['giasanpham'], 0, ',', '.') . 'VNĐ'  ?>
            </td>
            <td><?= $row['soluong'] ?> </td>
            <td><?= $row['tenloaisanpham'] ?> </td>
            <td><?= $row['tennhacungcap'] ?> </td>
            <td><?= $row['tomtat'] ?> </td>
            <td><?= $row['noidung'] ?> </td>
            <td><?php if ($row['trangthai'] == 1) {
                    echo "Mới";
                } else {
                    echo "Cũ";
                } ?>
            </td>
            <td>
                <a href="modules/quanlysanpham/xuly.php?id_sanpham=<?= $row['id_sanpham'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>|
                <a href="?action=quanlysanpham&query=sua&id_sanpham=<?= $row['id_sanpham'] ?>">Sửa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>