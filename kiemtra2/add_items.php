<?php
    include("config.php");
    $code = $_POST['code'];
    $name = $_POST['name']; 
    $cate = $_POST['cate'];
    $quantity = $_POST['quantity']; 
    $price = $_POST['price'];
    $file=$_FILES['imgpath'];
    $imgpath=$file['name'];
    $imgpath_tmp=$_FILES['imgpath']['tmp_name'];
    move_uploaded_file($imgpath_tmp,'assets/'.$imgpath);
    $sql = "INSERT INTO tblitems (code, name, cateId, quantity, price, imgpath)
            VALUES('$code','$name','$cate', '$quantity','$price', '$imgpath')";
    mysqli_query($connect, $sql);
    //Dong ket noi
    mysqli_close($connect);

    header("Location: list_items.php");
?>