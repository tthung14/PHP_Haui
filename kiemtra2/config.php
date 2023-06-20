<?php
    $servername = "localhost"; //neu khac cong 3306 thi phai ghi cong
    $uname = "root";
    $upass = "";
    $dbname = "banhang";

    $connect = mysqli_connect($servername, $uname, $upass, $dbname);

    if(!$connect) {
        die("Loi ket noi".mysqli_connect_error());
    }
?>