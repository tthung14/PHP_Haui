<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
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
        a {
            color: white;
        }
    </style>
</head>
<body>
    <a href="list_items.php"><button type="button">Mua thêm hàng</button></a>
    <table width = "100%" border="1" style="border-collapse:collapse ;">
        <tr>
            <th>Mã hàng</th>
            <th>Tên hàng</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
    <?php
        include("config.php");
        $thanhtien = 0;
        $total = 0;
        //thuc hien truy van lay du lieu --> select
        $sql = "SELECT * FROM tblgiohang ORDER BY id";
        $rs = mysqli_query($connect, $sql);
        while($r = mysqli_fetch_assoc($rs)) {
            $thanhtien = $r['price'] * $r['quantity'];
            $total += $thanhtien;
        ?>
        <tr>
            <td><?=$r['itemId']?></td>
            <td><?=$r['name']?></td>
            <td><?=$r['quantity']?></td>
            <td><?=$r['price']?></td>
            <td><?=$thanhtien?></td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="4">Tong tien</td>
            <td><?=$total?></td>
        </tr>
        <tr><td colspan="5" align="right"><button><a href="dathang.php?total=<?=$total?>">Đặt hàng</a></button></td></tr>
    </table>
</body>
</html>