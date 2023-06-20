<?php

if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['taikhoan'];
    $matkhau = $_POST['password'];
    $sql = "SELECT * FROM tbl_khachhang ,tbl_admin WHERE tbl_khachhang.taikhoan='" . $taikhoan . "' AND tbl_dangky.matkhau='" . $matkhau . "'  LIMIT 1";
    $row = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['taikhoan'];
        $_SESSION['email'] = $row_data['email'];
        $_SESSION['id_khachhang'] = $row_data['id_khachhang'];
        header("Location:index.php");
    } elseif ($taikhoan == 'admin') {
        header("Location:admincp/login.php");
    } else {
        $message = "Tài khoản mật khẩu không đúng";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>