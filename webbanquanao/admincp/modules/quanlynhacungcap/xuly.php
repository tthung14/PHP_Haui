<?php
    include "../../config/connect.php";
    $tennhacungcap=$_POST['tennhacungcap'];
    $diachi = $_POST['diachi'];
    $sodienthoai = $_POST['sodienthoai'];
    if(isset($_POST['them'])){
        $sql_them="INSERT INTO tbl_nhacungcap(tennhacungcap,diachi,sodienthoai) VALUE('".$tennhacungcap."','".$diachi."','".$sodienthoai."'); ";
        mysqli_query($connect,$sql_them);
        header('Location:../../index.php?action=quanlynhacungcap&query=them');
    }elseif(isset($_POST['sua'])){
        $sql_sua="UPDATE tbl_nhacungcap SET tennhacungcap='".$tennhacungcap."',diachi='".$diachi."',sodienthoai='".$sodienthoai."' WHERE id_nhacungcap='$_GET[id_nhacungcap]'";
        mysqli_query($connect,$sql_sua);
        header('Location:../../index.php?action=quanlynhacungcap&query=them');
    }else{
        $id=$_GET['id_nhacungcap'];
        $sql_xoa="DELETE FROM tbl_nhacungcap WHERE id_nhacungcap ='".$id."';";
        mysqli_query($connect,$sql_xoa);
        header('Location:../../index.php?action=quanlynhacungcap&query=them');
    }
?>