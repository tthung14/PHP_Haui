<?php
    include "../../config/connect.php";
    if(isset($_GET['mahoadon'])){
		$mahoadon = $_GET['mahoadon'];
		$sql_update ="UPDATE tbl_hoadon SET trangthai=0 WHERE mahoadon='".$mahoadon."'";
		$query = mysqli_query($connect,$sql_update);
        header('Location:../../index.php?action=quanlyhoadon&query=lietke');
	}
?>