<p>Xem đơn hàng</p>
<?php
$code = $_GET['mahoadon'];
$sql_lietke_hd = "SELECT * FROM tbl_chitiethoadon ,tbl_sanpham  WHERE tbl_chitiethoadon.id_sanpham=tbl_sanpham.id_sanpham 
AND tbl_chitiethoadon.mahoadon = $code 
ORDER BY tbl_chitiethoadon.id_chitiethoadon DESC";
$result_lietke_hd = mysqli_query($connect, $sql_lietke_hd);
?>
<p>Liệt kê hóa đơn</p>
<table style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr>
        <td>ID</td>
        <td>Mã hóa đơn</td>
        <td>Mã sản phẩm</td>
        <td>Tên sản phẩm</td>
        <td>Hình</td>
        <td>Số lượng</td>
        <td>Đơn giá</td>
        <td>Thành tiền</td>

    </tr>
    <?php
    $i = 0;
    $tongtien = 0;
    while ($row = mysqli_fetch_array($result_lietke_hd)) {
        $i++;
        $thanhtien = $row['giasanpham'] * $row['soluongmua'];
        $tongtien += $thanhtien;
    ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row['mahoadon'] ?></td>
            <td><?= $row['id_sanpham'] ?></td>
            <td><?= $row['tensanpham'] ?></td>
            <td style="width:150px;height:150px;">
                <img src="modules/quanlysanpham/uploads/<?= $row['hinhanh'] ?> " width="100%">
            </td>
            <td><?= $row['soluongmua'] ?></td>
            <td><?= number_format($row['giasanpham'], 0, ',', '.') . 'VNĐ' ?></td>
            <td><?= number_format($thanhtien, 0, ',', '.') . 'VNĐ' ?></td>
        </tr>
    <?php
    }
    ?>
    <tr>
        <th colspan="7">Tổng tiền : <?= number_format($tongtien, 0, ',', '.') . 'VNĐ' ?></th>
    </tr>
    <tr>
    </tr>
</table>