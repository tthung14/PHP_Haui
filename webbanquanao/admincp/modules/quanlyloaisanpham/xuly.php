<?php
    include "../../config/connect.php";
    $tenloaisanpham=$_POST['tenloaisanpham'];
    $mota = $_POST['mota'];
    if(isset($_POST['them'])){
        $sql_them="INSERT INTO tbl_loaisanpham(tenloaisanpham,mota) VALUE('".$tenloaisanpham."','".$mota."'); ";
        mysqli_query($connect,$sql_them);
        header('Location:../../index.php?action=quanlyloaisanpham&query=them');
    }elseif(isset($_POST['sua'])){
        $sql_sua="UPDATE tbl_loaisanpham SET tenloaisanpham='".$tenloaisanpham."',mota='".$mota."' WHERE id_loaisanpham='$_GET[id_loaisanpham]'";
        mysqli_query($connect,$sql_sua);
        header('Location:../../index.php?action=quanlyloaisanpham&query=them');
    }else{
        $id=$_GET['id_loaisanpham'];
        $sql_xoa="DELETE FROM tbl_loaisanpham WHERE id_loaisanpham ='".$id."';";
        mysqli_query($connect,$sql_xoa);
        header('Location:../../index.php?action=quanlyloaisanpham&query=them');
    }
?>