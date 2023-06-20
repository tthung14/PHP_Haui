
 <?php
	
	session_start();
	include('../../../admincp/config/connect.php');
	if(isset($_POST['redirect'])){
	$id_khachhang = $_SESSION['id_khachhang'];
	$mahoadon = rand(0,9999);// random tuwf 0 den 4 so
	$diachinhanhang = $_POST['diachinhanhang'];
	$hinhthucthanhtoan=$_POST['hinhthucthanhtoan'];
	$them_hoadon = "INSERT INTO tbl_hoadon(id_khachhang,mahoadon,diachinhanhang,trangthai, hinhthucthanhtoan) VALUE('".$id_khachhang."','".$mahoadon."','".$diachinhanhang."',1,'".$hinhthucthanhtoan."')";
	$hoadon_query = mysqli_query($connect,$them_hoadon);
	if($hoadon_query){
		//thêm giỏ hàng chi tiết
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham=$value['id'];
			$soluong=$value['soluong'];
			
			$insert_order_details = "INSERT INTO tbl_chitiethoadon(id_sanpham,mahoadon,soluongmua) VALUE('".$id_sanpham."','".$mahoadon."','".$soluong."')";
			mysqli_query($connect,$insert_order_details);
		}
	}
	header('Location:../../../index.php');
	}
?>