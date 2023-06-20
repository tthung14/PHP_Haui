<?php
    include("config.php");
    $id = $_GET['id'];
    $code = $_POST['code'];
    $name = $_POST['name']; 
    $cate = $_POST['cate'];
    $quantity = $_POST['quantity']; 
    $price = $_POST['price'];
    $file=$_FILES['imgpath'];
    $imgpath=$file['name'];
    $imgpath_tmp=$_FILES['imgpath']['tmp_name'];
    
    if($imgpath!='') {
        move_uploaded_file($imgpath_tmp,'assets/'.$imgpath);
        $sql_sua = "UPDATE tblitems SET code = '$code', name = '$name', cateId = '$cate', quantity = '$quantity', price = '$price', imgpath = '$imgpath' WHERE id = '$id'";
        $sql="SELECT * FROM tblitems WHERE id='$id'";
        $query=mysqli_query($connect,$sql);
            while($row=mysqli_fetch_array($query)){
                unlink('assets/'.$row['imgpath']);
            }
    }
    else{
        $sql_sua = "UPDATE tblitems SET code = '$code', name = '$name', cateId = '$cate', quantity = '$quantity', price = '$price' WHERE id = '$id'";
    }

    mysqli_query($connect,$sql_sua);
    
    //Dong ket noi
    mysqli_close($connect);

    header("Location: list_items.php");
?>