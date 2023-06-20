<?php
$sql_lietke_lh = "SELECT * FROM tbl_lienhe ORDER BY id_lienhe DESC";
$result_lietke_lh = mysqli_query($connect, $sql_lietke_lh);
?>
<p>Danh sách phản hồi của người dùng</p>
<table style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr>
        <td>ID</td>
        <td>Họ và Tên</td>
        <td>Email</td>
        <td>Vấn đề</td>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result_lietke_lh)) {
        $i++;

    ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row['hovaten'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['vande'] ?></td>
        </tr>

    <?php
    }
    ?>
</table>