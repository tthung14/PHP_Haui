<div class="clear"></div>
<div class="main">
    <?php

    if (isset($_GET['action']) && $_GET['query']) {
        $bientam = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $bientam = '';
        $query = '';
    }
    if ($bientam == 'quanlyloaisanpham' && $query == 'them') {
        include("modules/quanlyloaisanpham/them.php");
        include("modules/quanlyloaisanpham/lietke.php");
    } elseif ($bientam == 'quanlyloaisanpham' && $query == 'sua') {
        include("modules/quanlyloaisanpham/sua.php");
    }elseif ($bientam == 'quanlynhacungcap' && $query == 'them') {
        include("modules/quanlynhacungcap/them.php");
        include("modules/quanlynhacungcap/lietke.php");
    } elseif ($bientam == 'quanlynhacungcap' && $query == 'sua') {
        include("modules/quanlynhacungcap/sua.php");
    }elseif ($bientam == 'quanlysanpham' && $query == 'them') {
        include("modules/quanlysanpham/them.php");
        include("modules/quanlysanpham/lietke.php");
    } elseif ($bientam == 'quanlysanpham' && $query == 'sua') {
        include("modules/quanlysanpham/sua.php");
    }elseif ($bientam == 'quanlymausac' && $query == 'them') {
        include("modules/quanlymausac/them.php");
        include("modules/quanlymausac/lietke.php");
    } elseif ($bientam == 'quanlymausac' && $query == 'sua') {
        include("modules/quanlymausac/sua.php");
    }elseif ($bientam == 'quanlysize' && $query == 'them') {
        include("modules/quanlysize/them.php");
        include("modules/quanlysize/lietke.php");
    } elseif ($bientam == 'quanlysize' && $query == 'sua') {
        include("modules/quanlysize/sua.php");
    } elseif ($bientam == 'quanlytaikhoan' && $query == 'them') {
        include("modules/quanlytaikhoan/lietke.php");
    } elseif ($bientam == 'quanlytaikhoan' && $query == 'sua') {
        include("modules/quanlytaikhoan/sua.php");
    } elseif ($bientam == 'quanlylienhe' && $query == 'xemchitiet') {
        include("modules/quanlylienhe/xemchitiet.php");
    } elseif ($bientam == 'quanlyhoadon' && $query == 'lietke') {
        include("modules/quanlyhoadon/lietke.php");
    } elseif ($bientam == 'quanlyhoadon' && $query == 'xuly') {
        include("modules/quanlyhoadon/xuly.php");
    } elseif ($bientam == 'quanlyhoadon' && $query == 'xemhoadon') {
        include("modules/quanlyhoadon/xemhoadon.php");
    } elseif ($bientam == 'dangxuat') {
        include("../login.php");
    } else {
        include("modules/dashboard.php");
    }
    ?>
</div>