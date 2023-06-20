<link rel="stylesheet" href="../css/style_admincp.css">
<style>
    * {
        font-family: 'Poppins', sans-serif;
        text-decoration: none;
    }

    .admincp_list {
        list-style: none;
        width: 100%;
        display: inline-flex;
    }

    .admincp_list :hover {
        background-color: greenyellow;
    }

    .admincp_list li {
        list-style: none;
        text-align: center;
        background-color: #fbfef5;
        border: 1px solid black;
        padding: 10px;
    }

    .menu {
        width: 100%;
    }
</style>
<div class="menu">
    <ul class="admincp_list">
        <li><a href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a></li>
        <?php
        if (isset($_SESSION['dangky'])) {
            if ($_SESSION['dangky'] == 'admin') {
        ?>
                <li><a href="index.php?action=quanlyloaisanpham&query=them">Quản lý loại sản phẩm</a></li>
                <li><a href="index.php?action=quanlynhacungcap&query=them">Quản lý nhà cung cấp</a></li>
                <li><a href="index.php?action=quanlytaikhoan&query=them">Quản lý tài khoản</a></li>
                <li><a href="index.php?action=quanlymausac&query=them">Quản lý màu sắc sản phẩm</a></li>
                <li><a href="index.php?action=quanlysize&query=them">Quản lý size sản phẩm</a></li>
                <li><a href="index.php?action=quanlylienhe&query=xemchitiet">Quản lý liên hệ</a></li>
                <li><a href="index.php?action=quanlyhoadon&query=lietke">Quản lý hóa đơn</a></li>
        <?php
            }
        }
        ?>
    </ul>
</div>