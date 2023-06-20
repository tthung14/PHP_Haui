<?php
    $hoten = $_POST['hoten'];
    $thang = $_POST['thang'];
    $nam = $_POST['nam'];
    $chisodau = $_POST['chisodau'];
    $chisocuoi = $_POST['chisocuoi'];

    if(file_exists("water.txt")) {
        $fh = fopen("water.txt", "a");
    }
    else {
        $fh = fopen("water.txt", "w");
    }
    fwrite($fh, $hoten."\t".$thang."\t".$nam."\t".$chisodau."\t".$chisocuoi."\n");
    fclose($fh);
    header("location: hienthi.php");
?>