<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách hàng</title>
    <style>
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
        * {
            list-style: none;
            text-decoration: none;
        }
        a {
            color: white;
        }
    </style>
</head>
<body>
    <a href="giohang.php"><button>Giỏ hàng</button></a><br>
    <a href="items.php"><button type="button">Thêm hàng</button></a>
    <table width = "100%" border="1" style="border-collapse:collapse ;">
        <tr>
            <th>Mã hàng</th>
            <th>Tên hàng</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Hình ảnh</th>
            <th>Hành động</th>
        </tr>
    <?php
        include("config.php");
        $sql = "SELECT * FROM tblitems ORDER BY id";
        $rs = mysqli_query($connect, $sql);
        while($r = mysqli_fetch_assoc($rs)) {
        ?>
        <tr>
            <td><?=$r['code']?></td>
            <td><?=$r['name']?></td>
            <td><?=$r['quantity']?></td>
            <td><?=$r['price']?></td>
            <td><img style="width: 200px;" src="./assets/<?=$r['imgpath']?>" alt=""></td>
            <td><button><a href="add_giohang.php?code=<?=$r['code']?>&name=<?=$r['name']?>&price=<?=$r['price']?>">Mua</a></button>
                <button><a href="update_items.php?id=<?=$r['id']?>">Sửa</a></button>
                <button><a href="delete_items.php?id=<?=$r['id']?>">Xóa</a></button>
            </td>
        </tr>
        <?php
        }
    ?>
    </table>
</body>
</html>