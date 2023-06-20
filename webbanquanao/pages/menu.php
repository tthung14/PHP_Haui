<div class="clear"></div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="../css/style.css">

<?php
$sql_nhacungcap = "SELECT * FROM tbl_nhacungcap ORDER BY id_nhacungcap DESC";
$query_nhacungcap = mysqli_query($connect, $sql_nhacungcap);
$sql_loaisanpham = "SELECT * FROM tbl_loaisanpham ORDER BY id_loaisanpham DESC";
$query_loaisanpham = mysqli_query($connect, $sql_loaisanpham);
?>
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}
?>
<div id="header">
    <a href="index.php" class="logo">
        <img src="assets/logo.png" alt="">
    </a>
    <div id="menu">
        <div class="item">
            <a href="index.php">Trang chủ</a>
        </div>
        <div class="item">
            <a href="">Loại</a>
            <ul class="sub-menu">
                <?php
                while ($row_loaisanpham = mysqli_fetch_array($query_loaisanpham)) {
                ?>
                    <li class="sub-menu-item"> <a href="index.php?quanly=loaisanphamlist&id=<?= $row_loaisanpham['id_loaisanpham'] ?>"><?= $row_loaisanpham['tenloaisanpham'] ?></a></li>
                <?php
                }

                ?>
            </ul>
        </div>
        <div class="item">
            <a href="">Nhà Cung Cấp</a>
            <ul class="sub-menu">
                <?php
                while ($row_nhacungcap = mysqli_fetch_array($query_nhacungcap)) {
                ?>
                    <li class="sub-menu-item"> <a href="index.php?quanly=nhacungcaplist&id=<?= $row_nhacungcap['id_nhacungcap'] ?>"><?= $row_nhacungcap['tennhacungcap'] ?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="item">
            <a href="index.php?quanly=contact">Liên hệ</a>
        </div>
        <div class="search-product item">
            <form method="POST" action="index.php?quanly=timkiem">
                <input type="text" class="menu-input-text" placeholder="Tìm kiếm....." name="tukhoa" />
                <button type="submit" class="menu-input-submit" name="timkiem">Tìm Kiếm</button>
            </form>
        </div>
    </div>
    <div id="actions">
        <div class="item">
            <?php
            if (isset($_SESSION['dangky'])) {
            ?>
                <li style="list-style: none;"><a href="index.php?quanly=thongtin"><img src="assets/user.png" alt=""></a></li>
            <?php
            } else {
            ?>
                <li style="list-style: none;"> <a href="index.php?quanly=dangnhap"><img src="assets/user.png" alt=""></a></li>
            <?php
            }
            ?>
        </div>
        <div class="item">
            <a href="index.php?quanly=giohang"><img src="assets/cart.png" alt=""></a>
        </div>
    </div>
</div>