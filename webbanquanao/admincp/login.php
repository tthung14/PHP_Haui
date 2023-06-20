<?php
    session_start();
    include('./config/connect.php');
    if (isset($_POST['dangky'])) {
        $taikhoan = $_POST['username'];
        $matkhau = $_POST['password'];
        $sql_khachhang = "SELECT * FROM tbl_khachhang ,tbl_admin WHERE (tbl_khachhang.taikhoan='".$taikhoan."' AND tbl_khachhang.matkhau='".$matkhau."' AND tbl_khachhang.chucvu=1) OR (tbl_admin.username='".$taikhoan."' AND tbl_admin.password='".$matkhau."' ) LIMIT 1";
        $row_khachhang = mysqli_query($connect, $sql_khachhang);
        $count = mysqli_num_rows($row_khachhang);
        if ($count > 0) {
            $_SESSION['dangky'] = $taikhoan;
            header("Location:index.php");
        } else {
            $message = "Tài khoản mật khẩu không đúng";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <title>Login</title>
</head>

<body>
    <div class="top_link"><a href="../index.php"><img src="https://icons.veryicon.com/png/o/miscellaneous/two-color-webpage-small-icon/home-page-161.png" alt="">Trang chủ</a></div>
    <form class="login" autocomplete="off" action="" method="POST">
        <h2 style="text-align: center">ADMIN LOGIN</h2>
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" name="dangky">Login</button>
    </form>
</body>
</html>