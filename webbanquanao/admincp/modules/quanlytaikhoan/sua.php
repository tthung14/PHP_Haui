<?php
$sql_taikhoan = "SELECT * FROM tbl_khachhang WHERE id_khachhang='$_GET[id_khachhang]' LIMIT 1";
$querytk = mysqli_query($connect, $sql_taikhoan);
?>
<h3>SỬA THÔNG TIN KHÁCH HÀNG</h3>
<form action="modules/quanlytaikhoan/xuly.php?id_khachhang=<?= $_GET['id_khachhang'] ?>" method="POST" enctype="multipart/form-data">
	<table width="50%" style="border-collapse: collapse;">
		<?php
		while ($khachhang = mysqli_fetch_array($querytk)) {
		?>
			<tr>
				<td>Họ và tên</td>
				<td><input type="text" size="50" name="hovatenkh" value="<?= $khachhang['hovaten'] ?>"></td>
			</tr>
			<tr>
				<td>Tài khoản</td>
				<td><input type="text" size="50" name="taikhoankh" value="<?= $khachhang['taikhoan'] ?>"></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="text" size="50" name="matkhaukh" value="<?= $khachhang['matkhau'] ?>"></td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><input type="text" size="50" name="dienthoaikh" value="<?= $khachhang['sodienthoai'] ?>"> </td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" size="50" name="emailkh" value="<?= $khachhang['email'] ?>"> </td>
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td><textarea name="diachikh" cols="47" rows="10" style="resize: none;">
					<?= $khachhang['diachi'] ?>
			</textarea></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;"><input type="submit" name="sua" value="Sửa"></td>
			</tr>
			<tr>
				<td>Chức Vụ </td>
				<td>
					<select name="chucvukh">
						<?php
						if ($khachhang['chucvu'] == 1) {
						?>
							<option value="1" selected> Bán hàng</option>
							<option value="0">Không</option>
						<?php
						} else {
						?>
							<option value="1"> Bán hàng</option>
							<option value="0" selected>Không</option>
						<?php
						}
						?>
					</select>
				</td>
			</tr>
	</table>
</form>
<?php
		}

?>