<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
    <style>
        * {
            list-style: none;
            text-decoration: none;
        }
        table, tr, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            height: 30px;
        }
        input {
            height: 20px;
        }
        button {
            background-color: blue;
            height: 50px;
            width: 100px;
            color: white;
            margin-right: 30px;
            border-radius: 7px;
        }
    </style>
</head>

<body>
    <button><a href="list_donhang.php">Danh sách đơn hàng</a></button>
    <table width="100%" border="1" style="border-collapse:collapse ;">
        <tr>
            <th>Mã đơn hàng</th>
            <th>Mã hàng</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
        <?php
        include("config.php");
        $thanhtien = 0;
        $total = 0;
        $id = $_GET['id'];
        $sql = "SELECT * FROM tblgiohang";

        $rs = mysqli_query($connect, $sql);

        while ($r = mysqli_fetch_assoc($rs)) {
            $itemId = $r['itemId'];
            $quantity = $r['quantity'];
            $price = $r['price'];
            $new_od = "INSERT INTO tblorderdetails(orderId, itemId, quantity, price) VALUES ('$id', '$itemId', '$quantity', '$price')";
            mysqli_query($connect, $new_od);
        }
        $sql = "SELECT * FROM tblorderdetails WHERE orderId = $id";
        $rs = mysqli_query($connect, $sql);
        while ($r = mysqli_fetch_assoc($rs)) {
            $thanhtien = $r['price'] * $r['quantity'];
            $total += $thanhtien;
        ?>
            <tr>
                <td><?= $r['orderId'] ?></td>
                <td><?= $r['itemId'] ?></td>
                <td><?= $r['quantity'] ?></td>
                <td><?= $r['price'] ?></td>
                <td><?= $thanhtien ?></td>
            </tr>

        <?php
        }
        $sql = "DELETE FROM tblgiohang";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        ?>
        <tr>
            <td colspan="4">Tổng tiền</td>
            <td><?= $total ?></td>
        </tr>
    </table>
</body>

</html>