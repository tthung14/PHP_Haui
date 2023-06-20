<?php
    include "../../config/connect.php";

    $sanpham=$_POST['sanpham'];
    $mausac = $_POST['mausac'];
    $file=$_FILES['hinhanh'];
    $hinhanh=$file['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
    $hinhanhgio=time().'_'.$hinhanh;

    if(isset($_POST['them'])){
        if(isset($_FILES['hinhanh'])){
            if($file['type']== 'image/jpeg'||$file['type']== 'imgae/jpg'||$file['type']== 'image/png'){
                move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
                $sql_themmausac="INSERT INTO tbl_mausac(id_sanpham ,loaimau, hinhanh)
                VALUE ('".$sanpham."','".$mausac."','".$hinhanh."')";
                mysqli_query($connect,$sql_themmausac);
                header('Location:../../index.php?action=quanlymausac&query=them');
            }else{
                $hinhanh='';
                header('Location:../../index.php?action=quanlymausac&query=them');
            }
        }
    }

    elseif(isset($_POST['sua'])){
        if($hinhanh!=''){
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            $sql_sua="UPDATE tbl_mausac SET id_sanpham='".$sanpham."',mausac='".$mausac."',hinhanh='".$hinhanh."' WHERE id_mausac='$_GET[id_mausac]'";
            $sql="SELECT * FROM tbl_mausac WHERE id_mausac='$_GET[id_mausac]' LIMIT 1";
            $query=mysqli_query($connect,$sql);
            while($row=mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
            }
        }else{
            $sql_sua="UPDATE tbl_mausac SET id_sanpham='".$sanpham."',mausac='".$mausac."' WHERE id_mausac='$_GET[id_mausac]'";
        }
        mysqli_query($connect,$sql_sua);
        header('Location:../../index.php?action=quanlymausac&query=them');
    }

    else{
        $id=$_GET['id_mausac'];
        $sql="SELECT * FROM tbl_mausac WHERE id_mausac = '$id' LIMIT 1";
        $query=mysqli_query($connect,$sql);
        while($row=mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa="DELETE FROM tbl_mausac WHERE id_mausac ='".$id."';";
        mysqli_query($connect,$sql_xoa);
        header('Location:../../index.php?action=quanlymausac&query=them');
    }
?>