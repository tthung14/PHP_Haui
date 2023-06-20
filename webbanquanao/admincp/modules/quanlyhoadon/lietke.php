<?php
$sql_lietke_hd = "SELECT * FROM tbl_hoadon ,tbl_khachhang  WHERE tbl_hoadon.id_khachhang=tbl_khachhang.id_khachhang ORDER BY id_hoadon DESC";
$result_lietke_hd = mysqli_query($connect, $sql_lietke_hd);
?>
<p>Danh sách đơn hàng của người dùng</p>
<table style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr>
        <td>ID</td>
        <td>Mã hóa đơn</td>
        <td>Tên khách hàng</td>
        <td>Địa chỉ</td>
        <td>Tài khoản</td>
        <td>Hình thức thanh toán</td>
        <td>Số điện thoại</td>
        <td>Tình trạng </td>
        <td colspan="2">Quản lý</td>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result_lietke_hd)) {
        $i++;

    ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row['mahoadon'] ?></td>
            <td><?= $row['hovaten'] ?></td>
            <td><?= $row['diachi'] ?></td>
            <td><?= $row['taikhoan'] ?></td>
            <td><?= $row['hinhthucthanhtoan'] ?></td>
            <td><?= $row['sodienthoai'] ?></td>
            <td>
                <?php if ($row['trangthai'] == 1) {
                    echo '<a href="modules/quanlyhoadon/xuly.php?mahoadon=' . $row['mahoadon'] . '">Đơn hàng mới</a>';
                } else {
                    echo 'Đã xem';
                }
                ?>
            </td>
            <td>
                <a href="index.php?action=quanlyhoadon&query=xemhoadon&mahoadon=<?= $row['mahoadon'] ?>">Xem chi tiết hóa đơn</a>|
        </tr>

    <?php
    }
    ?>
</table>