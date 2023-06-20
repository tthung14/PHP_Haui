<?php
$sql_lietke_taikhoan = "SELECT * FROM tbl_khachhang ORDER BY id_khachhang DESC";
$result_lietke_taikhoan = mysqli_query($connect, $sql_lietke_taikhoan);
?>
<p>Danh sách tài khoản</p>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Họ và tên</th>
        <th>Tài khoản</th>
        <th>Mật khẩu</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th colspan="2"></th>
        <th>Chức vụ</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result_lietke_taikhoan)) {
        $i++;
    ?>
        <tr>
            <td style="height:100px;"> <?= $i ?></td>
            <td> <?= $row['hovaten'] ?></td>
            <td> <?= $row['taikhoan'] ?></td>
            <td> <?= $row['matkhau'] ?></td>
            <td> <?= $row['sodienthoai'] ?></td>
            <td> <?= $row['email'] ?></td>
            <td style="width:100px;"> <?= $row['diachi'] ?></td>
            <td>
                <a href="?action=quanlytaikhoan&query=sua&id_khachhang=<?= $row['id_khachhang'] ?>"> Sửa </a>
            </td>
            <td>
                <a href="modules/quanlytaikhoan/xuly.php?id_khachhang=<?= $row['id_khachhang'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
            </td>
            <td><?php if ($row['chucvu'] == 1) {
                    echo "Nhân viên nhập hàng";
                } else {
                    echo "Không";
                } ?>
            </td>
        </tr>
    <?php
    }
    ?>
</table>