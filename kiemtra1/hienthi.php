<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="formnhapthongtin.php"><button type="button" style="width: 100px; height: 30px; background: black; color: white;margin: 20px 20px 20px 50px">them</button></a>
    <table border="1" style="border-collapse: collapse;" width="100%">
        <tr>
            <th>stt</th>
            <th>ho va ten</th>
            <th>thang</th>
            <th>nam</th>
            <th>so nuoc tieu thu</th>
            <th>thanh tien</th>
            <th>thue vat(10%)</th>
            <th>thue bvmt(15%)</th>
            <th>Tong tien</th>
        </tr>
        <?php
        $fh =  fopen("water.txt", "r") or die("loi doc file");
        $count = 0;
        $thanhtien = 0;
        while(!feof($fh)) {
            $count++;
            $line = fgets($fh);
            if($line != "") {
                $temp = explode("\t", $line);
                $sodien = $temp[4] - $temp[3];
                ?>
                <tr>
                    <td><?=$count?></td>
                    <td><?=$temp[0]?></td>
                    <td><?=$temp[1]?></td>
                    <td><?=$temp[2]?></td>
                    <td><?=$sodien?></td>
                    <td>
                        <?php
                        if($sodien <= 10) {
                            $thanhtien = 5000 * $sodien;
                        }
                        else if($sodien > 10 && $sodien <= 20) {
                            $thanhtien = 50000 + ($sodien - 10) * 10000;
                        }
                        else if($sodien > 20 && $sodien <= 30) {
                            $thanhtien = 50000 + 100000 + ($sodien - 20) * 15000;
                        }
                        else {
                            $thanhtien = 50000 + 100000 + 150000 + ($sodien - 30) * 20000;
                        }
                        echo $thanhtien;
                        ?>
                    </td>
                    <td><?=$thanhtien * 0.1?></td>
                    <td><?=$thanhtien * 0.15?></td>
                    <td><?=$thanhtien * (0.1 + 0.15 + 1)?></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
</body>

</html>