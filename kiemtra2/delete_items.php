<?php
    include("config.php");
    $id=$_GET['id'];
    $sql="SELECT * FROM tblitems WHERE id = '$id' LIMIT 1";
    $query=mysqli_query($connect,$sql);
    while($row=mysqli_fetch_array($query)){
        unlink('assets/'.$row['imgpath']);
    }
    $sql_xoa="DELETE FROM tblitems WHERE id ='".$id."';";
    mysqli_query($connect,$sql_xoa);

    mysqli_close($connect);
    header('Location: list_items.php');
?>