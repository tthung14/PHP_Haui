<?php
    include("config.php");
    $date = date("d/m/Y");
    $time = date("H:i:s");
    $total = $_GET['total'];

    $sql = "INSERT INTO tblorders(orderDate, orderTime, total) VALUES ('$date', '$time','$total')";

    mysqli_query($connect, $sql);

    mysqli_close($connect);

    header("Location: list_donhang.php");
?>