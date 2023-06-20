<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng</title>
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
    <a href="list_items.php"><button type="button">Danh sách hàng</button></a>
    <table width = "100%" border="1" style="border-collapse:collapse ;">
        <tr>
            <th>Mã đơn hàng</th>
            <th>Ngày đặt</th>
            <th>Giờ đặt</th>
            <th>Tổng tiền</th>
            <th>Hành động</th>
        </tr>
    <?php
        include("config.php");
        $sql = "SELECT * FROM tblorders ORDER BY id";
        $rs = mysqli_query($connect, $sql);
        while($r = mysqli_fetch_assoc($rs)) {
        ?>
        <tr>
            <td><?=$r['id']?></td>
            <td><?=$r['orderDate']?></td>
            <td><?=$r['orderTime']?></td>
            <td><?=$r['total']?></td>
            <td><a href="list_order.php?id=<?=$r['id']?>">Xem chi tiết đơn hàng</a></td>
        </tr>
        <?php
        }
    ?>
    </table>
</body>
</html>