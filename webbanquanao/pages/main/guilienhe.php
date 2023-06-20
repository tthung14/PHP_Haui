<?php
    include("../../../BTLNhom9/admincp/config/connect.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO tbl_lienhe(hovaten, email, vande) VALUES ('$name','$email','$message')";

    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header("Location: ../../../BTLNhom9/index.php");
?>