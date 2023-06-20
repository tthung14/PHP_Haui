<?php
    session_start();
    include("config.php");
    $code = $_GET['code'];
    $name = $_GET['name'];
    $price = $_GET['price'];

    $sql = "SELECT * FROM tblgiohang WHERE itemId = $code";

    $rs = mysqli_query($connect, $sql);

    $r = mysqli_fetch_assoc($rs);

    if ($r) {
        $add = "UPDATE tblgiohang SET quantity=quantity+1 WHERE itemId = $code";

        mysqli_query($connect, $add);
    } else {
        $new_od = "INSERT INTO tblgiohang(itemId, name, quantity, price) VALUES ('$code', '$name', '1', '$price')";
        mysqli_query($connect, $new_od);
    }

    mysqli_close($connect);
    header("location: list_items.php");
?>