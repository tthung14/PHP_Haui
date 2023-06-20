<?php
    include "../../config/connect.php";

    $sanpham=$_POST['sanpham'];
    $size = $_POST['size'];

    if(isset($_POST['them'])){
        $sql_themkichthuoc="INSERT INTO tbl_size(id_sanpham ,loaisize)
                VALUE ('".$sanpham."','".$size."')";
                mysqli_query($connect,$sql_themkichthuoc);
                header('Location:../../index.php?action=quanlysize&query=them');
    }

    elseif(isset($_POST['sua'])){

        $sql_sua="UPDATE tbl_size SET id_sanpham='".$sanpham."',loaisize='".$size."' WHERE id_size='$_GET[id_size]'";
        mysqli_query($connect,$sql_sua);
        header('Location:../../index.php?action=quanlysize&query=them');
    }

    else{
        $id=$_GET['id_size'];
        $sql_xoa="DELETE FROM tbl_size WHERE id_size ='".$id."';";
        mysqli_query($connect,$sql_xoa);
        header('Location:../../index.php?action=quanlysize&query=them');
    }
?>