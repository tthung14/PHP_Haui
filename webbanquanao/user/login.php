<?php
session_start();
include('../admincp/config/connect.php');
if (isset($_POST['dangky'])) {
	$taikhoan = $_POST['taikhoan'];
	$matkhau = $_POST['matkhau'];
	$sql = "SELECT * FROM tbl_khachhang ,tbl_admin WHERE tbl_khachhang.taikhoan='" . $taikhoan . "' AND tbl_khachhang.matkhau='" . $matkhau . "'  LIMIT 1";
	$row = mysqli_query($connect, $sql);
	$count = mysqli_num_rows($row);
	if ($count > 0) {
		$row_data = mysqli_fetch_array($row);
		$_SESSION['dangky'] = $row_data['taikhoan'];
		$_SESSION['email'] = $row_data['email'];
		$_SESSION['id_khachhang'] = $row_data['id_khachhang'];
		header("Location:../index.php");
	} elseif ($taikhoan == 'admin') {
		header("Location:../admincp/login.php");
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="./login.css">
</head>

<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="../index.php"><img src="https://icons.veryicon.com/png/o/miscellaneous/two-color-webpage-small-icon/home-page-161.png" alt="Home">TRANG CHỦ</a></div>
				<div class="contact">
					<form action="" method="POST">
						<h3>ĐĂNG NHẬP</h3>
						<input type="text" name="taikhoan" placeholder="Tài khoản">
						<input type="password" name="matkhau" placeholder="Mật khẩu">
						<table>
							<tr>
								<td><input type="checkbox" name="" id=""></td>
								<td><label><b>Ghi nhớ</b></label></td>
							</tr>
						</table>
						<button class="submit" name="dangky">ĐĂNG NHẬP</button>
						<h5>Chưa có tài khoản?<a href="../signup/signup.php">Đăng ký</a></h5>
					</form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>Quần Áo Local Brand</h2>
					<h5>HÀNG VIỆT NAM CHẤT LƯỢNG CAO</h5>
				</div>
				<div class="right-inductor">
					<div class="slideshow-container">
						<div class="mySlides fade" style="display: none;">
							<img src="../assets/kid_p1.jpg" style="width:100%">
						</div>
						<div class="mySlides fade" style="display: none;">
							<img src="../assets/man_p1.jpg" style="width:100%">
						</div>
						<div class="mySlides fade" style="display: block;">
							<img src="../assets/woman_p1.jpg" style="width:100%">
						</div>
					</div>
					<br>
					<div style="text-align:center">
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot active"></span>
					</div>

					<script>
						let slideIndex = 0;
						showSlides();

						function showSlides() {
							let i;
							let slides = document.getElementsByClassName("mySlides");
							let dots = document.getElementsByClassName("dot");
							for (i = 0; i < slides.length; i++) {
								slides[i].style.display = "none";
							}
							slideIndex++;
							if (slideIndex > slides.length) {
								slideIndex = 1
							}
							for (i = 0; i < dots.length; i++) {
								dots[i].className = dots[i].className.replace(" active", "");
							}
							slides[slideIndex - 1].style.display = "block";
							dots[slideIndex - 1].className += " active";
							setTimeout(showSlides, 3000); // Change image every 2 seconds
						}
						const next = document.querySelector('.next')
						const prev = document.querySelector('.prev')
						const comment = document.querySelector('#list-comment')
						const commentItem = document.querySelectorAll('#list-comment .item')
						var translateY = 0
						var count = commentItem.length
					</script>
				</div>
			</div>
		</div>
	</section>
</body>

</html>