<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập hàng</title>
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
    <form action="add_items.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="">Mã hàng:</label></td>
                <td><input type="text" name="code" id="code"></td>
            </tr>
            <tr>
                <td><label for="">Tên hàng:</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="">Nhóm hàng:</label></td>
                <td>
                    <select name="cate" id="cate">
                        <?php
                            include("config.php");
                            $sql = "SELECT * FROM tblcategory";
                            $rs = mysqli_query($connect, $sql);
                            while($r = mysqli_fetch_assoc($rs)) {
                                ?>
                                <option value="<?=$r['id']?>"><?=$r['name']?></option>
                                <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="">Số luong:</label></td>
                <td><input type="text" name="quantity" id="quantity"></td>
            </tr>
            <tr>
                <td><label for="">Đơn giá:</label></td>
                <td><input type="text" name="price" id="price"></td>
            </tr>
            <tr>
                <td><label for="">Hình ảnh:</label></td>
                <td><input type="file" name="imgpath" id="imgpath"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><button type="submit">Lưu</button><button type="reset">Xóa</button></td>
            </tr>
        </table>
    </form>
</body>
</html>