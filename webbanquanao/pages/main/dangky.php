<?php
if (isset($_POST['dangky'])) {
	$tenkhachhang = $_POST['hovaten'];
	$taikhoan = $_POST['taikhoan'];
	$matkhau = $_POST['matkhau'];
	$rematkhau =  $_POST['rematkhau'];
	$email = $_POST['email'];
	$dienthoai = $_POST['dienthoai'];
	$diachi = $_POST['diachi'];
	if (!$tenkhachhang || !$taikhoan || !$matkhau || !$rematkhau || !$email || !$dienthoai || !$diachi) {
		echo "Vui lòng nhập đầy đủ thông tin.";
	} elseif ($matkhau != $rematkhau) {
		echo "Mật khẩu chưa trùng";
	} else {
		$sql_dangky = "INSERT INTO tbl_khachhang(hovaten,taikhoan,matkhau,sodienthoai,email,diachi) VALUE('" . $tenkhachhang . "','" . $taikhoan . "','" . $matkhau . "','" . $dienthoai . "','" . $email . "','" . $diachi . "')";
		$query_dangky = mysqli_query($connect, $sql_dangky);
		if ($query_dangky) {
			echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $taikhoan;
			$_SESSION['email'] = $email;
			$_SESSION['id_khachhang'] = mysqli_insert_id($connect);
		}
	}
}
?>