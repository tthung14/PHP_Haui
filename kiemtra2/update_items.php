<?php
    include("config.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM tblitems WHERE id = '$id'";
    $rs = mysqli_query($connect, $sql);
?>
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

    <form method="post" action="update.php?id=<?=$id?>" enctype="multipart/form-data">
        <table>
<?php
    while($r = mysqli_fetch_assoc($rs)) {
        ?>

            <tr>
                <td><label for="">Mã hàng:</label></td>
                <td><input type="text" name="code" id="code" value="<?=$r['code']?>"></td>
            </tr>
            <tr>
                <td><label for="">Tên hàng:</label></td>
                <td><input type="text" name="name" id="name" value="<?=$r['name']?>"></td>
            </tr>
            <tr>
                <td><label for="">Nhóm hàng:</label></td>
                <td>
                    <select name="cate" id="cate">
                        <?php
                            include("config.php");
                            $sql = "SELECT * FROM tblcategory";
                            $rs_cate = mysqli_query($connect, $sql);
                            while($r_cate = mysqli_fetch_assoc($rs_cate)) {
                                if ($r_cate['id'] == $r['cateId']) {
                                ?>
                                <option value="<?=$r_cate['id']?>" selected><?=$r_cate['name']?></option>
                                <?php
                            } else {
                            ?>
                                <option value="<?= $r_cate['id'] ?>"><?= $r_cate['name'] ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="">Số luong:</label></td>
                <td><input type="text" name="quantity" id="quantity" value="<?=$r['quantity']?>"></td>
            </tr>
            <tr>
                <td><label for="">Đơn giá:</label></td>
                <td><input type="text" name="price" id="price" value="<?=$r['price']?>"></td>
            </tr>
            <tr>
                <td><label for="">Hình ảnh:</label></td>
                <td><input type="file" name="imgpath" id="imgpath">
                    <img src="assets/<?= $r['imgpath'] ?> " width="150px">
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2"><button type="submit">Lưu</button></td>
            </tr>
        </table>
    </form>
        <?php
        mysqli_close($connect);
    }
?>
