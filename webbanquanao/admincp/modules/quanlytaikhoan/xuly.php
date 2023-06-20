<?php
    include "../../config/connect.php";
    $hovatenkh=$_POST['hovatenkh'];
    $taikhoankh = $_POST['taikhoankh'];
    $matkhaukh = $_POST['matkhaukh'];
    $dienthoaikh = $_POST['dienthoaikh'];
    $emailkh = $_POST['emailkh'];
    $diachikh = $_POST['diachikh'];
    $chucvukh =$_POST['chucvukh'];

   if(isset($_POST['sua'])){
        $sql_sua_kh="UPDATE tbl_khachhang SET hovaten='".$hovatenkh."',taikhoan='".$taikhoankh."',matkhau='".$matkhaukh."',sodienthoai='".$dienthoaikh."',email='".$emailkh."',diachi='".$diachikh."',chucvu='".$chucvukh."' WHERE id_khachhang='$_GET[id_khachhang]'";
        mysqli_query($connect,$sql_sua_kh);
        header('Location:../../index.php?action=quanlytaikhoan&query=them');
    }else{
        $id=$_GET['id_khachhang'];
        $sql_xoa_kh="DELETE FROM tbl_khachhang WHERE id_khachhang ='".$id."';";
        mysqli_query($connect,$sql_xoa_kh);
        header('Location:../../index.php?action=quanlytaikhoan&query=them');
    }
?>